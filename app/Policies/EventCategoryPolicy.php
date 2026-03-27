<?php

namespace App\Policies;

use App\Models\EventCategory;
use App\Models\User;

class EventCategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function view(User $user, EventCategory $eventCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function update(User $user, EventCategory $eventCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function delete(User $user, EventCategory $eventCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restore(User $user, EventCategory $eventCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDelete(User $user, EventCategory $eventCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }
}
