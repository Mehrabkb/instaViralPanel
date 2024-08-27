<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface{
    public function checkUserExist($username)
    {
        // TODO: Implement checkUserExist() method.
        return User::where('user_name', $username)->exists();
    }
    public function checkUserPassword($username, $password)
    {
        // TODO: Implement checkUserPassword() method.
        $user = User::where('user_name', $username)->first();
        if(Hash::check($password, $user->password)){
            return true;
        }
        return false;
    }
    public function getUserByUsername($username){
        return User::where('user_name', $username)->first();
    }
}
