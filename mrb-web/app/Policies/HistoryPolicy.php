<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\History;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class HistoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:History');
    }

    public function view(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('View:History');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:History');
    }

    public function update(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('Update:History');
    }

    public function delete(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('Delete:History');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:History');
    }

    public function restore(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('Restore:History');
    }

    public function forceDelete(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('ForceDelete:History');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:History');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:History');
    }

    public function replicate(AuthUser $authUser, History $history): bool
    {
        return $authUser->can('Replicate:History');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:History');
    }
}
