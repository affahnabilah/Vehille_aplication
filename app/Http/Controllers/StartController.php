<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(Request $request)
    {
        $car = Car::all();
        // $pegawai = Pegawai::all();

        return view('start', [
            'car' => $car
            // 'pegawai' => $pegawai
        ]);
    }
}
