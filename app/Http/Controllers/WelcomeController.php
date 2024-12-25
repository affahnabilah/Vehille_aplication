<?php

namespace App\Http\Controllers;
use App\Models\Car; 
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $car = Car::all(); // Ambil semua data barang dari database
        return view('welcome', compact('car')); // Kirim data ke view
    }
}