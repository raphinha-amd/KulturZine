<?php

namespace App\Services;

use App\Models\MemberMonthlyDue;
use App\Models\User;
use Carbon\Carbon;

class MemberMonthlyDueService
{
    public function generateForMonth(Carbon|string $billingMonth, float $amount): int
    {
        $normalizedMonth = $billingMonth instanceof Carbon
            ? $billingMonth->copy()->startOfMonth()->toDateString()
            : Carbon::parse($billingMonth)->startOfMonth()->toDateString();

        $created = 0;

        User::role('member')->select('id')->chunkById(200, function ($members) use ($normalizedMonth, $amount, &$created) {
            $memberIds = $members->pluck('id');

            $existingUserIds = MemberMonthlyDue::query()
                ->whereIn('user_id', $memberIds)
                ->whereDate('billing_month', $normalizedMonth)
                ->pluck('user_id')
                ->all();

            $rows = [];
            $now = now();

            foreach ($memberIds as $memberId) {
                if (in_array($memberId, $existingUserIds, true)) {
                    continue;
                }

                $rows[] = [
                    'user_id' => $memberId,
                    'billing_month' => $normalizedMonth,
                    'amount' => $amount,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            if ($rows === []) {
                return;
            }

            $created += MemberMonthlyDue::query()->insertOrIgnore($rows);
        });

        return $created;
    }
}
