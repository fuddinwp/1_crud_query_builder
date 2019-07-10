<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    /*public function index()
    {
        return 'hello hello !';
    }*/

    public function index()
    {
        return view('blog/home');
    }


}
