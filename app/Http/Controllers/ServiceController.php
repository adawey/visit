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
}
