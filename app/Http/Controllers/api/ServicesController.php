<?php

namespace App\Http\Controllers\api;

use App\Avg;
use App\service;
use App\regions_lite;
use App\districts_lite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{

    public function getServices()
    {
        $services = service::select('id', 'name', 'description', 'link', 'image', 'region_id')->get();
        $regions = DB::table('regions_lite')->get();
        $rates = Avg::All();
        foreach ($services as $service) {
            $service->image = url('/') . '/images/offer/' . $service->image;
        }
        return response()->json(['services' => $services, 'regions' => $regions,  'rates' => $rates,  'status' => 'ok'], 200);
    }
    public function getServicesById($id)
    {
        $rates = Avg::where('service_id', $id)->get();
        $service = service::select('id', 'name', 'description', 'link', 'image', 'region_id')->find($id);
        $service->image = url('/') . '/images/offer/' . $service->image;
        $region = DB::table('regions_lite')->where('id', $service->region_id)->get();
        return response()->json(['service' => $service, 'regions' => $region, 'rates' => $rates, 'status' => 'ok'], 200);
    }
    public function searching(Request $request)
    {
        $service = service::where('name', 'like', '%' . $request->name . '%')->get();
        $service->image = url('/') . '/images/offer/' . $service->image;
        $region = DB::table('regions_lite')->where('id', $service[0]['region_id'])->get();
        $rates = Avg::where('service_id', $service[0]['id'])->get();
        return response()->json(['services' => $service, 'region' => $region, 'rates' => $rates,  'status' => 'ok'], 200);
    }
}
