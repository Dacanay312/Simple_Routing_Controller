<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = "These are my hobbies.";
        return view('hobbies', compact('data'));
    }
}