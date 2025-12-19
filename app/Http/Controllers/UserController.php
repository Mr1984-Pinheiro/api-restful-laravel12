<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        
        $validator = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|string|unique:users',
            'birthday' => 'required|date'
        ]);

        try {
            $user = User::create([
              'name' => $request->name,
              'email' => $request->email,
              'birthday' => $request->birthday,
              'password' => Hash::make(123)
            ]);
            
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating user'], 400);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json($user, 200);
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'User not found'], 404);
        }        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|string',
            'birthday' => 'required|date'
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
