<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function building()
    {
        $room = [
            '建物です'
        ];
        return view('building', $room);
    }
    public function building($room)
    {
        $room = [
            '部屋番号は' . '{room}' . 'です'
        ];
        return view ('building', $room);
    }
}
