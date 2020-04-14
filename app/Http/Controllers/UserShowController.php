<?php

namespace App\Http\Controllers;

use App\Repostiories\Contracts\UserRepositoryInterface;

class UserShowController extends Controller
{
    public function show(int $id, UserRepositoryInterface $userRepository)
    {
        try {
            return response()->json([
                'error' => false,
                'message' => 'We found your user with id #' . $id,
                'item' => $userRepository->get($id)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }
}
