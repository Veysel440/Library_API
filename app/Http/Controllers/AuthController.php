<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ?? false,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;


        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }


    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Geçersiz kimlik bilgileri'], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    protected function getOrCreateToken($user): string
    {
        $tokenModel = $user->tokens()->latest('id')->first();

        if ($tokenModel && $tokenModel->expires_at > now()) {
            return $tokenModel->token;
        }

        $user->tokens()->delete();

        $tokenResult = $user->createToken('api_token');
        $token = $tokenResult->plainTextToken;


        $user->tokens()->latest('id')->first()->update([
            'expires_at' => now()->addDay(),
        ]);

        return $token;
    }

    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Başarıyla çıkış yapıldı'], 200);
    }
}
