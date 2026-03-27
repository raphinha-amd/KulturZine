<?php

namespace App\Policies;

use App\Models\Gallery;
use App\Models\User;

class GalleryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function view(User $user, Gallery $gallery): bool
    {
        return $user->hasRole('admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Gallery $gallery): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Gallery $gallery): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Gallery $gallery): bool
    {
        return $user->hasRole('admin');
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Gallery $gallery): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
