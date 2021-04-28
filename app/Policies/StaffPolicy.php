<?php

namespace App\Policies;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
          return $user->can('View Staff');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function view(User $user, Staff $staff)
    {
        //
          return $user->can('View Staff');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
          return $user->can('Create Staff');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function update(User $user, Staff $staff)
    {
        //
          return $user->can('Update Staff');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function delete(User $user, Staff $staff)
    {
        //
          return $user->can('Delete Staff');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function restore(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function forceDelete(User $user, Staff $staff)
    {
        //
    }
}
