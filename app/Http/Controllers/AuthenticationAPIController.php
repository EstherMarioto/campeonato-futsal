<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\{user};
use Illuminate\Foundation\Auth\User as AuthUser;

class AuthenticationAPIController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return response()->json(['message' => "Email incorreto!"]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['message' => "Senha incorreta!"]);
        }
        $token = $user->createToken($request->email . strtotime("now"))->plainTextToken;

        return response()->json([
            "acess_token" => $token,
            "token_type" => "bearer"
        ]);
    }
}