<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewdashboard()
    {
        if(!isset($data)){
            $data['response']=null;
        }
        return view('template/head') . view('template/navig') . view('home/dashboard',$data) . view('template/footer');
    }
}
