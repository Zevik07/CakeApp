<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Http\Resources\Cake as CakeResource;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data = [
            'cakes' => 
                Cake::all()
        ];
        return view('welcome', $data);
    }
}
