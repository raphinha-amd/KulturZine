<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberMonthlyDue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'billing_month',
        'amount',
        'paid_at',
        'paid_by',
        'reminder_sent_at',
    ];

    protected function casts(): array
    {
        return [
            'billing_month' => 'date',
            'amount' => 'decimal:2',
            'paid_at' => 'datetime',
            'reminder_sent_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function paidBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'paid_by');
    }

    public function isPaid(): bool
    {
        return $this->paid_at !== null;
    }

    public function markAsPaid(User $admin): void
    {
        if ($this->isPaid()) {
            return;
        }

        $this->update([
            'paid_at' => now(),
            'paid_by' => $admin->id,
        ]);
    }

    public function canSendReminder(int $dayInterval = 7): bool
    {
        if ($this->isPaid()) {
            return false;
        }

        if ($this->reminder_sent_at === null) {
            return true;
        }

        return $this->reminder_sent_at->lte(now()->subDays($dayInterval));
    }
}
