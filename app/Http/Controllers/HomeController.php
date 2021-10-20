<?php

namespace App\Http\Controllers;
use App\Http\Resources\Cake as CakeResource;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        // $data = CakeResource::collection();
        return view('welcome');
    }
}
