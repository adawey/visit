<?php

namespace App\Http\Controllers;

use App\service;
use App\Http\traits\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\offerRequest;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    use media;
    //
    public function check()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect('admin/');
        } else {
            return redirect('admin/check');
        }
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/check');
    }

    public function index()
    {
        $services = DB::table('services')->get();
        $regions = DB::table('regions_lite')->get();
        return view('admin.service.index', compact('services', 'regions'));
    }

    public function create()
    {
        $regions = DB::table('regions_lite')->get();
        return view('admin.service.create', compact('regions'));
    }

    public function store(offerRequest $request)
    {
        $imageName = $this->uploadMedia($request->image, 'offer');
        $request = $request->except('_token', 'image', 'page', '_method');
        $request['image'] = $imageName;
        DB::table('services')->insert($request);
        return redirect()->route('admin')->with('success',  'تم انشاء العرض بنجاح  ');
    }

    public function edit($id)
    {
        $serve = service::find($id);
        $regions = DB::table('regions_lite')->get();
        return view('admin.service.edit', compact('serve', 'regions'));
    }
    public function update(Request $request, $id)
    {
        $result = $request->except('image', '_token', '_method');
        if ($request->has('image')) {
            $oldImage = DB::table('services')->select('image')->where('id', $id)->first()->image;
            $this->deleteMedia($oldImage, 'offer');
            $imageName = $this->uploadMedia($request->image, 'offer');
            $result['image'] = $imageName;
        }

        DB::table('services')->where('id', $id)->update($result);
        return redirect()->route('start')->with('success',  'تم تعديل العرض بنجاح  ');


    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $this->deleteMedia($service->image, 'offer');
        $service->delete();
        return redirect()->route('start')->with('success',  'تم مسح العرض بنجاح  ');
    }
}
