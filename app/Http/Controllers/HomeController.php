<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index1()
    {
        return view('home.index', [
            'name' => "Johe Doe",
            'numbers' => range(1, 30)
        ]);
    }
}
