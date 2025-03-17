<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show()
    {
        // $name = 'Shruti';
        $students = ['Abhi','Shruti', 'Ram', 'Shahil'];
        // $students = [];
        return view('contact', [ 'students' => $students]);
    }
}
