<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class DashboardController extends Controller
{
    public function index(){
        $data['channels_count'] = Channel::count();
        return view('dashboard.index')->with($data);
    }

    
}
