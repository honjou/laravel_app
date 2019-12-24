<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XdebugController extends Controller
{
    public function index()
    {
        $a = 'Hello';
        $b = 'world!';
        return view('xdebug.index');
    }
}
