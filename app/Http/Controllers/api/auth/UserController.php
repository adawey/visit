<?php

namespace App\Http\Controllers\api\auth;

use App\User;
use App\Mail\forgetpassword;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\forgetassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        return response()->json(['token' => $token, 'data' => $user, 'status' => 'ok'], 200);

    }

    public function Logout(Request $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        $user->tokens()->delete();
        return response()->json(['msg' => 'logout done', 'status' => 'ok'], 200);
    }
    public function forgetpassword(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            $code = rand(1000, 999999);
            $user->code = $code;
            $user->save();
            $token = 'Bearer '  . $user->createToken($user->email)->plainTextToken;
            Mail::to($user->email)->send(new forgetpassword($user->name, $user->code));
            return response()->json(['token' => $token, 'data' => $user, 'status' => 'ok'], 200);
        } else {
            return response()->json(['data' => 'email not found', 'status' => 'ok'], 200);
        }
    }
    public function resetPassword(forgetassword $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        if ($user->code == $request->code) {
            $data = $request->validated();
            $data['password'] = Hash::make($request->password);
            $user->password = $data['password'];
            $user->save();
            $token = 'Bearer '  . $user->createToken($user->email)->plainTextToken;
        } else {
            return response()->json(['data' => 'الكود غير متوافق', 'status' => 'false'], 200);
        }
        return response()->json(['token' => $token, 'data' => $user, 'status' => 'ok'], 200);
    }
}
