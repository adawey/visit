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
        if ($services->isEmpty()) {
            return response()->json(['msg' => 'service empty', 'status' => 'ok'], 200);
        }
        $regions = DB::table('regions_lite')->get();
        $rates = Avg::All();
        foreach ($services as $service) {
            $service->image = url('/') . '/images/offer/' . $service->image;
        }
        return response()->json(['services' => $services, 'regions' => $regions,  'rates' => $rates,  'status' => 'ok'], 200);
    }
    public function getServicesById($id)
    {
        $service = service::select('id', 'name', 'description', 'link', 'image', 'region_id')->find($id);
        if ($service) {
            $service->image = url('/') . '/images/offer/' . $service->image;
            $rates = Avg::where('service_id', $service->id)->first();
            $rates->ratesum = (int)$rates->ratesum;
            $rates->avg = floatval($rates->avg);
            $region = DB::table('regions_lite')->where('id', $service->region_id)->first();
            $service->location = $region->name_ar;
            $service->rate = $rates;
            return response()->json(['service' => $service, 'status' => 'ok', 'msg' => 'service found'], 200);
        } else {
            return response()->json(['msg' => 'service not found', 'status' => 'ok'], 200);
        }

    }
    public function searching(Request $request)
    {
        $service = service::where('name', 'like', '%' . $request->name . '%')->first();
        if ($service) {
            $service->image = url('/') . '/images/offer/' . $service['image'];
            $region = regions_lite::where('id', $service->region_id)->first();
            $rates = Avg::where('service_id', $service->id)->first();
            return response()->json(['services' => $service, 'region' => $region, 'rates' => $rates,  'status' => 'ok', 'msg' => 'service found'], 200);
        } else {
            return response()->json(['msg' => 'service not found', 'status' => 'ok'], 200);
        }
    }

    public function test(Request $request)
    {
        $service = service::where('name', 'like', '%' . $request->name . '%')->first();
        if ($service) {
            $service->image = url('/') . '/images/offer/' . $service->image;
            $rates = Avg::where('service_id', $service->id)->first();
            $region = DB::table('regions_lite')->where('id', $service->region_id)->first();
            $service->location = $region->name_ar;
            $service->rate = $rates;
            return response()->json(['service' => $service, 'regions' => $region, 'rates' => $rates, 'status' => 'ok', 'msg' => 'service found'], 200);
        } else {
            return response()->json(['msg' => 'service not found', 'status' => 'ok'], 200);
        }
    }




}
