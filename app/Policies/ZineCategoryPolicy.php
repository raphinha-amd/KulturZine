<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ZineCategory;

class ZineCategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function view(User $user, ZineCategory $zineCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function update(User $user, ZineCategory $zineCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function delete(User $user, ZineCategory $zineCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restore(User $user, ZineCategory $zineCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDelete(User $user, ZineCategory $zineCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }
}
