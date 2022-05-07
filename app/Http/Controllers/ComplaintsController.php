<?php

namespace App\Http\Controllers;

use App\Complaints;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{

    public function complaints()
    {
        $complaints = Complaints::get();
        return view('admin.service.complaintspage', compact('complaints'));
    }

}
