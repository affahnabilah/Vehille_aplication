<?php

namespace App\Http\Controllers;
use App\Models\Car; 
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    $cars = Car::all(); // Ambil semua data barang dari database
    return view('welcome', compact('cars')); // Kirim data ke view
}
}
