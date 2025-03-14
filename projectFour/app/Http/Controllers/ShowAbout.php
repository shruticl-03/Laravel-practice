<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAbout extends Controller
{
    public function __invoke(Request $request)
    {
        return view('aboutme');
    }
}
