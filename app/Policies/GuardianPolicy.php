<?php

namespace App\Policies;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GuardianPolicy
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
          return $user->can('View Guardian');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guardian  $guardian
     * @return mixed
     */
    public function view(User $user, Guardian $guardian)
    {
        //
          return $user->can('View Guardian');

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
          return $user->can('Create Guardian');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guardian  $guardian
     * @return mixed
     */
    public function update(User $user, Guardian $guardian)
    {
        //
          return $user->can('Update Guardian');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guardian  $guardian
     * @return mixed
     */
    public function delete(User $user, Guardian $guardian)
    {
        //
          return $user->can('Delete Guardian');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guardian  $guardian
     * @return mixed
     */
    public function restore(User $user, Guardian $guardian)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guardian  $guardian
     * @return mixed
     */
    public function forceDelete(User $user, Guardian $guardian)
    {
        //
    }
}
