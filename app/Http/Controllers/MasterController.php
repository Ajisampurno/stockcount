<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class MasterController extends Controller
{
    public function index()
    {
        $master = Master::latest();
        return view('index', [
            'master' => $master->get()
        ]);
    }

    public function sampling()
    {
        return view('/sampling');
    }
}
