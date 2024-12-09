<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        return view('planets', ['planets' => $planets]);
    }

    public function show($planetName)
    {
        $planet = DB::table('planets')->where('name', $planetName)->first();
        return view('planet', ['planet' => $planet]);
    }
}