<?php

namespace App\Console\Commands;

use App\Models\MemberMonthlyDue;
use Filament\Notifications\Notification;
use Illuminate\Console\Command;

class SendUnpaidDuesReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dues:send-reminders {--interval=7}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send unpaid monthly due reminders to members';

    public function handle(): int
    {
        $interval = max((int) $this->option('interval'), 1);
        $sent = 0;

        MemberMonthlyDue::query()
            ->with('user')
            ->whereNull('paid_at')
            ->whereDate('billing_month', '<=', now()->startOfMonth()->toDateString())
            ->chunkById(100, function ($dues) use ($interval, &$sent) {
                foreach ($dues as $due) {
                    if (! $due->user || ! $due->canSendReminder($interval)) {
                        continue;
                    }

                    Notification::make()
                        ->title('Pengingat Iuran Bulanan')
                        ->body('Iuran periode ' . $due->billing_month->translatedFormat('F Y') . ' sebesar Rp ' . number_format((float) $due->amount, 0, ',', '.') . ' masih belum lunas.')
                        ->warning()
                        ->sendToDatabase($due->user);

                    $due->update([
                        'reminder_sent_at' => now(),
                    ]);

                    $sent++;
                }
            });

        $this->info("{$sent} notifikasi pengingat berhasil dikirim.");

        return self::SUCCESS;
    }
}
