<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
{
    $data = "This is the About Me page.";
    return view('about-me', compact('data'));
}
}