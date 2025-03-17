<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show()
    {
        $name = 'Shruti';
        $students = ['Abhi', 'Ram', 'Shahil'];
        // $students = [];
        return view('contact', ['nm' => $name, 'students' => $students]);
    }
}
