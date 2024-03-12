<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class awardsController extends Controller
{
    //

    public function index()
    {
        return view('admin/section/award');
    }
}
