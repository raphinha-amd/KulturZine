<?php

namespace App\Policies;

use App\Models\PostCategory;
use App\Models\User;

class PostCategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function view(User $user, PostCategory $postCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function update(User $user, PostCategory $postCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function delete(User $user, PostCategory $postCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restore(User $user, PostCategory $postCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDelete(User $user, PostCategory $postCategory): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'member']);
    }
}
