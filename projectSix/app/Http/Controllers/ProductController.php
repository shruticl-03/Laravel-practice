<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function display()
    {
        $websiteName = 'ClickCart';
        $user = 'Admin';
        $userType = $user == 'Admin' ? true : false;
        // $students = ['Shruti', 'Abhi', 'Ram', 'Shahil'];
        $students = [];
        // return view('product', ['wn' => $websiteName, 'userType' => $userType]);
        return view('product', ['wn' => $websiteName, 'userType' => $userType, 'students' => $students]);
    }
}
