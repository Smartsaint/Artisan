<?php

namespace App\Http\Controllers\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return view('system.role.index');
    }

    public function create()
    {
        return view('system.role.create');
    }
}
