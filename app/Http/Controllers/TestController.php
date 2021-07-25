<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    {
        return 'hello world !';
    }

    public function profile()
    {
        return 'this is the profile page ! ';
    }
}
