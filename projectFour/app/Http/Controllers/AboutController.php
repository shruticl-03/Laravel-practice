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
    function show($name){
        return "Hello " .$name;
    }

}
