<?php
namespace Puikepixels\PuikCrmCore\Policies;

use Puikepixels\PuikCrmCore\Models\CustomerGroup;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CustomerGroupPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('customergroup:index');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CustomerGroup $customerGroup): bool
    {
        return $user->hasPermissionTo('customergroup:index');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('customergroup:create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CustomerGroup $customerGroup): bool
    {
        return $user->hasPermissionTo('customergroup:edit');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CustomerGroup $customerGroup): bool
    {
        return $user->hasPermissionTo('customergroup:delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CustomerGroup $customerGroup): bool
    {
        return $user->hasPermissionTo('customergroup:delete');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CustomerGroup $customerGroup): bool
    {
        return $user->hasPermissionTo('customergroup:delete');
    }
}
