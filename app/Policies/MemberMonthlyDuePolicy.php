<?php

namespace App\Policies;

use App\Models\MemberMonthlyDue;
use App\Models\User;

class MemberMonthlyDuePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('dues.view');
    }

    public function view(User $user, MemberMonthlyDue $memberMonthlyDue): bool
    {
        return $user->hasRole('admin') || $user->id === $memberMonthlyDue->user_id;
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, MemberMonthlyDue $memberMonthlyDue): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, MemberMonthlyDue $memberMonthlyDue): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function markPaid(User $user, MemberMonthlyDue $memberMonthlyDue): bool
    {
        if ($memberMonthlyDue->isPaid()) {
            return false;
        }

        return $user->can('dues.markPaid');
    }
}
