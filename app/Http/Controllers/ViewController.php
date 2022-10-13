<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewlogin()
    {
        return view('template/head') . view('login') . view('template/footer');
    }

    public function viewreister(){
        return view('template/head') . view('register') . view('template/footer');
    }

    public function viewrefresh()
    {
        // 
    }
}
