<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (! Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid Credentials.',
            ], 401);
        }

        $user = $request->user();
        $token = $user->createToken('postman')->plainTextToken;

        return response()->json([
            'message' => 'Login Successful.',
            'token' => $token,
            'user' => $user,
        ]);
    }
}
