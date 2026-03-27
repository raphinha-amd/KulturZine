<?php

namespace App\Console\Commands;

use App\Models\MemberMonthlyDue;
use App\Models\User;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Database\QueryException;
use Illuminate\Console\Command;

class GenerateMonthlyMemberDues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dues:generate-monthly {--month=} {--amount=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate monthly dues for all members';

    public function handle(): int
    {
        try {
            $billingMonth = $this->resolveBillingMonth();
        } catch (InvalidFormatException) {
            $this->error('Format --month tidak valid. Gunakan format YYYY-MM.');

            return self::FAILURE;
        }

        $amount = $this->resolveAmount();

        if ($amount <= 0) {
            $this->error('Nominal iuran harus lebih besar dari 0.');

            return self::FAILURE;
        }

        $created = 0;

        User::role('member')->select('id')->chunkById(100, function ($members) use ($billingMonth, $amount, &$created) {
            foreach ($members as $member) {
                $exists = MemberMonthlyDue::query()
                    ->where('user_id', $member->id)
                    ->whereDate('billing_month', $billingMonth->toDateString())
                    ->exists();

                if ($exists) {
                    continue;
                }

                try {
                    MemberMonthlyDue::create([
                        'user_id' => $member->id,
                        'billing_month' => $billingMonth->toDateString(),
                        'amount' => $amount,
                    ]);

                    $created++;
                } catch (QueryException $exception) {
                    // Ignore duplicate key conflicts when concurrent generation occurs.
                    if ((string) $exception->getCode() !== '23000') {
                        throw $exception;
                    }
                }
            }
        });

        $this->info("Generated {$created} monthly dues for period {$billingMonth->format('Y-m')}.");

        return self::SUCCESS;
    }

    private function resolveBillingMonth(): Carbon
    {
        $inputMonth = $this->option('month');

        if (filled($inputMonth)) {
            return Carbon::createFromFormat('Y-m', $inputMonth)->startOfMonth();
        }

        return now()->startOfMonth();
    }

    private function resolveAmount(): float
    {
        $inputAmount = $this->option('amount');

        if (filled($inputAmount)) {
            return (float) $inputAmount;
        }

        return (float) config('app.member_monthly_due_amount', 100000);
    }
}
