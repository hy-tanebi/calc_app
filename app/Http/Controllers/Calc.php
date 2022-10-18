<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calc extends Controller
{
    public function result($val1, $calc, $val2)
    {
        switch ($calc) {
            case 'addition':
                $result = $val1 + $val2;
                break;
            case 'subtraction':
                $result = $val1 - $val2;
                break;
            case 'multiplication':
                $result = $val1 * $val2;
                break;
            case 'division':
                $result = $val1 / $val2;
                break;
        }

        return view('calc.calc', ['val1' => $val1, 'calc' => $calc, 'val2' => $val2, 'result' => $result]);
    }
}
