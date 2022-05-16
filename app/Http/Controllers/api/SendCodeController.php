<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Mail\register;
use App\Mail\forgetpassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendCodeController extends Controller
{
    public function SendCode(Request $request, $status)
    {

        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        // return $token;
        $code = rand(1000, 999999);
        $user =  User::find($AuthorizationUser->id);
        $user->code = $code;
        $user->save();
        if ($status == 1) {
            Mail::to($user->email)->send(new register($user->name, $user->code));
        } else {
            Mail::to($user->email)->send(new forgetpassword($user->name, $user->code));
        }
        return response()->json(['user' => $user, 'status' => 'ok'], 200);
    }


    public function Verification(Request $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        if ($user->code == $request->code) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = $token;
            $user->save();
        }
        $user->save();
        return response()->json(['user' => $user, 'status' => 'ok'], 200);
    }
}
