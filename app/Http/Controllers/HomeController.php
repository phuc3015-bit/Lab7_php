<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van A',
            'age' => 20,
            'school' => 'Đại học CNTT'
        ];

        return view('welcome', $data);
    }
        public function multiplication($n)
    {
    if (!is_numeric($n)) {
        return view('multiplication', ['error' => 'Vui lòng nhập số hợp lệ']);
    }

    return view('multiplication', ['n' => $n]);
    }
}
