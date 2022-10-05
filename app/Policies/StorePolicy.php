<?php

namespace App\Policies;

use App\Models\Store;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StorePolicy
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
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Store  $Store
     * @return mixed
     */
    public function view(User $user, Store $store)
    {
        return ($user->id == $user->hasPermission('review_store'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return ($user->id == $user->hasPermission('create_store'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Store  $Store
     * @return mixed
     */
    public function update(User $user, Store $Store)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Store  $Store
     * @return mixed
     */
    public function delete(User $user, Store $Store)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Store  $Store
     * @return mixed
     */
    public function restore(User $user, Store $Store)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Store  $Store
     * @return mixed
     */
    public function forceDelete(User $user, Store $Store)
    {
        //
    }
}
