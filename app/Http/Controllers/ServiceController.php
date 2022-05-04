<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $offers = service::all();
        return view('admin.offer', compact('offers'));
    }
    public function getservocebyid($id)
    {
        $service = service::find($id);


        return view('admin1.service.singlepage', compact('service'));
    }
}
