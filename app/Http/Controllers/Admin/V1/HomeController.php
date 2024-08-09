<?php

namespace App\Http\Controllers\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('system.home');
    }
}
