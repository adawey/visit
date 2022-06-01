<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{



    public function store(Request $request)
    {

        $token = $request->header('Authorization');
        $AuthorizationUser = Auth::guard('sanctum')->user();
        $user =  User::find($AuthorizationUser->id);
        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' =>  $user->id,
            'user_name' =>  $user->name,
            'service_id' =>  $request->service_id,
        ]);
        if ($comment) {
            $msg = ' comment done ';
        } else {
            $msg = 'نعتذر ولكن هناك خطأ ما من فضلك حاول مره اخرى ';
        }
        return response()->json(['msg' => $msg, 'status' => 'ok']);
    }
}
