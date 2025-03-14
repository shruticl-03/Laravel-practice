<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Controller Returning String
    // function show(){
    //     return "Hello";
    // }

    // Controller Returning String with Parameter
    // function show($name){
    //     return "Hello " .$name;
    // }

    // Controller Returning View
    // function show()
    // {
    //     return view('aboutme');
    // }

    // Controller Returning View with Parameter
    function show($name)
    {
        return view('aboutme', ['nm' => $name]);
    }
}
