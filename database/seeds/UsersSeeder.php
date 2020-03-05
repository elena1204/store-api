<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $user = new User();

        $user->name = 'John Doe';
        $user->email = 'john@doe.com';
        $user->password = '123456';

        $user->save();
    }
}
