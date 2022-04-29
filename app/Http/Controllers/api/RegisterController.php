<?php

namespace App\Http\Controllers\api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function RegisterUser(RegisterRequest $request)
    {
        $data =  $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $token = 'Bearer ' . $user->createToken($request->email)->plainTextToken;
        return response()->json(['token' => $token,  'user' => $user, 'status' => 'ok'], 200);

    }   //sanctum    token => flatter
}
