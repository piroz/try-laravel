<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function count()
    {
        return User::all()->count();
    }
}
