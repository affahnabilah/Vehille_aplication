<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();

        return view('car.car', [
            'car' => $car
        ]);
    }

    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $validated = $request->validate([
         //   'bagian' => 'required|string|max:255',
        //    'nama_peminta' => 'required|string|max:255',
            // 'pimpinan1' => 'required|string|max:255',
         //    'pimpinan2' => 'nullable|string',
         //    'pimpinan3' => 'nullable|string',
          //   'pimpinan4' => 'nullable|string',
           //  'pimpinan5' => 'nullable|string',
           //  'pelaksana1' => 'required|string|max:255',
           //  'pelaksana2' => 'nullable|string',
            // 'pelaksana3' => 'nullable|string',
            // 'pelaksana4' => 'nullable|string',
            // 'pelaksana5' => 'nullable|string',
            // 'tujuan' => 'required|string|max:255',
            // 'keperluan' => 'required|string|max:255',
            // 'date' => 'nullable|date',
            // 'jam_berangkat' => 'nullable|date_format:H:i',
             //'jam_kembali' => 'nullable|date_format:H:i',
           //  'jenis_kendaraan' => 'required|string|max:255',
            // 'nopol' => 'required|string|max:20',
            // 'pengemudi' => 'required|string|max:255',
            // 'estimasi_bbm' => 'required|numeric',
            // 'estimasi_tol' => 'required|numeric',
            // 'manager_AKU_dan_umum' => 'required|string|max:255',
            // 'manager_tanaman' => 'required|string|max:255',
            // 'status' => 'required|in:waiting,approval,rejected',
       //  ]);
        
        // Simpan data
        Car::create($request->all());
    
        Alert::success('Success', 'Car has been saved!');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('car.car-detail', compact('car'));
    }

    public function print($id)
    {
        // Mengambil data mobil berdasarkan ID
        $car = Car::findOrFail($id); // Mengambil satu mobil berdasarkan ID
    
        // Siapkan data untuk view
        $data = ['car' => $car]; // Mengirimkan data ke view
    
        // Membuat PDF dari view dengan data yang disiapkan
        $pdf = PDF::loadView('car.car-print', $data); // Pastikan nama view sesuai
    
        // Mengembalikan PDF sebagai stream
        return $pdf->stream('view-car.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_car)
    {
        $car = Car::findOrFail($id_car);

        return view('car.car-edit', [
            'car' => $car,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_car)
    
    {
        $validated = $request->validate([
            'bagian' => 'required|string|max:255',
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
            'date' => 'nullable|date',
            'jam_berangkat' => 'nullable|date_format:H:i',
            'jam_kembali' => 'nullable|date_format:H:i',
            'jenis_kendaraan' => 'required|string|max:255',
            'nopol' => 'required|string|max:20',
            'pengemudi' => 'required|string|max:255',
            'estimasi_bbm' => 'required|numeric',
            'estimasi_tol' => 'required|numeric',
            'status' => 'required|in:waiting,approval,rejected',
        ]);

        $car = Car::findOrFail($id_car);
        $car->update($validated);

        Alert::info('Success', 'Mobil has been updated !');
        return redirect('/car');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_car)
{ 
    try {
        $deletedcar = Car::findOrFail($id_car);

        $deletedcar->delete();

        Alert::error('Success', 'Mobil has been deleted !');
        return redirect('/car');
    } catch (Exception $ex) {
        Alert::warning('Error', 'Cant deleted, Mobil already used !');
        return redirect('/car');
    }
}

}