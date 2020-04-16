<?php

namespace App\Http\Controllers;

use App\Repostiories\Contracts\UserRepositoryInterface;

class UserDeleteController extends Controller
{
    public function delete(int $id, UserRepositoryInterface $userRepository)
    {
        try {
            $user = $userRepository->get($id);

            $userRepository->delete($user);

            return response()->json([
                'error' => false,
                'message' => 'User is deleted'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }
}
