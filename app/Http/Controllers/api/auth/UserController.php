<?php

namespace App\Http\Controllers\api\auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{


    public function Login(LoginRequest $request)
    {

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $token = 'Bearer '  . $user->createToken($request->email)->plainTextToken;
        response()->json(['token' => $token, 'data' => $user, 'status' => 'ok']);

    }

    public function Logout(Request $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        $user->tokens()->delete();
        return 'logout done';
    }
}