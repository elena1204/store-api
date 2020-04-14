<?php

namespace App\Repostiories;

use App\Repostiories\Contracts\UserRepositoryInterface;
use App\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function all(): array
    {
        return User::all()->all();
    }

    public function get(int $id): User
    {
        return User::findOrFail($id);
    }

    public function store(User $user)
    {
        $user->save();
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
