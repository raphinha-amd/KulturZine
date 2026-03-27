<?php

namespace App\Console\Commands;

use App\Services\MemberMonthlyDueService;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
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

    public function __construct(private readonly MemberMonthlyDueService $memberMonthlyDueService)
    {
        parent::__construct();
    }

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

        $created = $this->memberMonthlyDueService->generateForMonth($billingMonth, $amount);

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
