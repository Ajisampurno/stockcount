<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function sampling()
    {
        return view('/sampling');
    }
}
