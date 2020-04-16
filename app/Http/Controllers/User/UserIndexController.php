<?php

namespace App\Http\Controllers;

use App\Repostiories\Contracts\UserRepositoryInterface;

class UserIndexController extends Controller
{
    public function index(UserRepositoryInterface $userRepository)
    {
        try {
            return response()->json([
                'error' => false,
                'message' => 'Here are all the users in the database',
                'item' => $userRepository->all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }
}
