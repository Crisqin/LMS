<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chosen;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChosenPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny()
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chosen  $chosen
     * @return mixed
     */
    public function view(User $user, Chosen $chosen)
    {
        return $this->hasAccess($user, $chosen);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chosen  $chosen
     * @return mixed
     */
    public function update(User $user, Chosen $chosen)
    {
        return $this->hasAccess($user, $chosen);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chosen  $chosen
     * @return mixed
     */
    public function delete(User $user, Chosen $chosen)
    {
        return $this->hasAccess($user, $chosen);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chosen  $chosen
     * @return mixed
     */
    public function restore(User $user, Chosen $chosen)
    {
        return $this->hasAccess($user, $chosen);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chosen  $chosen
     * @return mixed
     */
    public function forceDelete(User $user, Chosen $chosen)
    {
        return $this->hasAccess($user, $chosen);
    }

    private function hasAccess(User $user, Chosen $chosen)
    {
        return $chosen->user_id == $user->id;
    }
}
