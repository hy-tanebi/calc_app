<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function add($val1, $val2)
    {
        return view('calc.addition', ['val1' => $val1, 'val2' => $val2]);
    }

    public function divi($val1, $val2)
    {
        return view('calc.division', ['val1' => $val1, 'val2' => $val2]);
    }

    public function multi($val1, $val2)
    {
        return view('calc.multiplication', ['val1' => $val1, 'val2' => $val2]);
    }

    public function sub($val1, $val2)
    {
        return view('calc.subtraction', ['val1' => $val1, 'val2' => $val2]);
    }
}
