<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact() {
        $email = 'poolsander97@gmail.com';
        return view('contact', ['email' => $email]);
    }
}
