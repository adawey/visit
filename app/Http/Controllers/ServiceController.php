<?php

namespace App\Http\Controllers;

use App\Avg;
use App\rate;
use App\User;
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
        $rates = Avg::where('service_id', $service->id)->first();
        if ($rates == null) {
            $rates = 0;
        } else {
            $rates->avg = (int)($rates->avg);
        }

        $comments = $service->comments()->get();
        return view('admin1.service.singlepage', compact('service', 'comments', 'rates'));
    }
}
