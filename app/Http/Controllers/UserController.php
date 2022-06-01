<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $request = $request->except('_token',  'page', '_method');
        DB::table('users')->insert($request);
        return redirect()->route('users')->with('success',  'تم انشاء العرض بنجاح  ');
    }
    public function show()
    {

    }
    public function showById($id)
    {
        $user = User::find($id);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'تم مسح المستخدم بنجاح');
    }
}
