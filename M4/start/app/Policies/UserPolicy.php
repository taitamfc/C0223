<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user){
        return $user->hasPermisson('User_viewAny');
    }
    public function view(User $user){
        return $user->hasPermisson('User_view');
    }
    public function create(User $user){
        return $user->hasPermisson('User_create');
    }
    public function update(User $user){}
    public function delete(User $user){}
    public function restore(User $user){}
    public function forceDelete(User $user){}
}
