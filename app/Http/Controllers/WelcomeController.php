<?php

namespace App\Http\Controllers;
use App\Models\Car; 
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    public function index() {
        $car =  Car::all(); // Ambil semua data dari tabel cars
        return view('welcome', compact('car')); // Kirim data ke view
    }

    public function create()
    {
        return view('car.car-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           'bagian' => 'required|string|max:255|unique:cars',
            'nama_peminta' => 'required|string|max:255',
            'pimpinan1' => 'required|string|max:255',
            'pimpinan2' => 'nullable|string',
            'pimpinan3' => 'nullable|string',
            'pimpinan4' => 'nullable|string',
            'pimpinan5' => 'nullable|string',
            'pelaksana1' => 'required|string|max:255',
            'pelaksana2' => 'nullable|string',
            'pelaksana3' => 'nullable|string',
            'pelaksana4' => 'nullable|string',
            'pelaksana5' => 'nullable|string',
            'tujuan' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam_berangkat' => 'required|date_format:H:i',
            'jam_kembali' => 'required|date_format:H:i',
            'jenis_kendaraan' => 'required|string|max:255',
            'nopol' => 'required|string|max:20',
            'pengemudi' => 'required|string|max:255',
            'estimasi_bbm' => 'required|numeric',
            'estimasi_tol' => 'required|numeric',
            
        ]);
        $car = Car::create($request->all());

        Alert::success('Success', 'car has been saved !');
        return redirect('/welcome');
    }

    public function show(Car $car)
    {
        //
    }

}