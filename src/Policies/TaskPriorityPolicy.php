<?php
namespace Puikepixels\PuikCrmCore\Policies;

use Puikepixels\PuikCrmCore\Models\TaskPriority;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPriorityPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('taskpriority:index');

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TaskPriority $taskPriority): bool
    {
        return $user->hasPermissionTo('taskpriority:index');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('taskpriority:create');

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TaskPriority $taskPriority): bool
    {
        return $user->hasPermissionTo('taskpriority:edit');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TaskPriority $taskPriority): bool
    {
        return $user->hasPermissionTo('taskpriority:delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TaskPriority $taskPriority): bool
    {
        return $user->hasPermissionTo('taskpriority:delete');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TaskPriority $taskPriority): bool
    {
        return $user->hasPermissionTo('taskpriority:delete');
    }
}
