<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    function index()
    {
        return view('cake-add');
    }
}
