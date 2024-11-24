<?php

namespace App\Http\Controllers;

use App\Models\{Car};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $car = Car::count();
        // $pegawai = Pegawai::count();

        return view('dashboard.dashboard', [
            'car' => $car,
            // 'pegawai' => $pegawai,
        ]);
    }
}
