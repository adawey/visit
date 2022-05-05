<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Suggestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SugistionController extends Controller
{

    public function store(Request $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        // return $token;
        $user =  User::find($AuthorizationUser->id);
        $suggest = Suggestion::create([
            'suggest' => $request->suggest,
            'user_id' =>  $user->id,
            'user_name' =>  $user->name
        ]);
        if ($suggest) {
            $msg = 'تم تسجيل مقترحك شكرا لثقتك ';
        } else {
            $msg = 'نعتذر ولكن هناك خطأ ما من فضلك حاول مره اخرى ';
        }

        return response()->json(['msg' => $msg, 'status' => 'ok']);
    }
}
