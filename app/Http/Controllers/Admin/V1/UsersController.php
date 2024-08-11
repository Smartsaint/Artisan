<?php

namespace App\Http\Controllers\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('system.user.index');
    }

    public function show($id)
    {
        return view('system.user.show');
    }
    
}
