<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Complaints;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ComplaintsController extends Controller
{
    public function store(Request $request)
    {
        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        $suggest = Complaints::create([
            'type' => $request->type,
            'complaint' => $request->complaint,
            'user_id' =>  $user->id,
            'user_name' =>  $user->name
        ]);
        if ($suggest) {
            $msg = 'تم تسجيل الشكوى نعتذر عن الازعاج';
        } else {
            $msg = 'نعتذر ولكن هناك خطأ ما من فضلك حاول مره اخرى ';
        }
        return response()->json(['msg' => $msg, 'status' => 'ok']);
    }
}
