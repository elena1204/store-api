<?php

namespace App\Repostiories\Contracts;

use App\User;

interface UserRepositoryInterface
{
    public function all(): array;

    public function get(int $id): User;

    public function store(User $user);

    public function delete(User $user);
}
