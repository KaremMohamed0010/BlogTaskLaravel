<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class StoreUserAction
{
    public function execute($request)
    {
        try {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $user->save();

            return response()->json(['message' => 'User registered successfully']);
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());

            return response()->json(['message' => 'An error occurred while creating the user'], 500);
        }
    }
}
