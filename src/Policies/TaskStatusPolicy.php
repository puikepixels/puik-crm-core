<?php
namespace Puikepixels\PuikCrmCore\Policies;

use Puikepixels\PuikCrmCore\Models\TaskStatus;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskStatusPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('taskstatus:index');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TaskStatus $taskStatus): bool
    {
        return $user->hasPermissionTo('taskstatus:index');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('taskstatus:create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TaskStatus $taskStatus): bool
    {
        return $user->hasPermissionTo('taskstatus:edit');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TaskStatus $taskStatus): bool
    {
        return $user->hasPermissionTo('taskstatus:delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TaskStatus $taskStatus): bool
    {
        return $user->hasPermissionTo('taskstatus:delete');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TaskStatus $taskStatus): bool
    {
        return $user->hasPermissionTo('taskstatus:delete');
    }
}
