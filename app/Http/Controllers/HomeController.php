<?php

namespace App\Http\Controllers;

use App\Http\Resources\Cake as CakeResource;
use App\Models\Cake;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data = new CakeResource(Cake::first());
        return view('welcome', ['data' => $data]);
    }
}
