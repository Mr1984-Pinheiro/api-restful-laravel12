<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|min:10',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if($user) {
            
            $token = $user->createToken('api_token', ['post:create', 'post:update', 'post:read'])->plainTextToken;
            
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'data' => $user,
                'token' => $token
            ], 201);
        } 

        return response()->json([
            'status' => 'error',
            'message' => 'User not created'
        ], 400);
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string|min:8'
        ]);

        $validateAuth = Auth::attempt($validator);
        

        if($validateAuth) {
            
             $user = User::where('email', $validator['email'])->first();

            $token = $user->createToken('api_token', ['post:create', 'post:update', 'post:read'])->plainTextToken;

            return response()->json([
                'status' => 'success',
                'message' => 'User logged in successfully',                
                'token' => $token
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'User not found'
        ], 404);
    }

    public function logout(Request $request)
    {
        $validateToken = PersonalAccessToken::findToken($request->token);

        if($validateToken) {
            
            $validateToken->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'User logged out successfully'
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'User not logged out'
        ], 400);
    }
}
