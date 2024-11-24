<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::orderBy('name', 'asc')->get();

        return view('mobil.mobil', [
            'mobil' => $mobil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.mobil-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:t_mobil',
            'category' => 'required',
            'color' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $mobil = Mobil::create($request->all());

        Alert::success('Success', 'Mobil has been saved !');
        return redirect('/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    public function printMobil()
    {
        $mobil = Mobil::all();
        $data = ['t_mobil' => $mobil];

        $pdf = PDF::loadView('mobil.mobil-print', $data);

        return $pdf->stream('view-mobil.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_mobil)
    {
        $mobil = mobil::findOrFail($id_mobil);

        return view('mobil.mobil-edit', [
            'mobil' => $mobil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_mobil)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:t_mobil,name,' . $id_mobil . ',id_mobil',
            'category' => 'required',
            'color' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $mobil = Mobil::findOrFail($id_mobil);
        $mobil->update($validated);

        Alert::info('Success', 'Mobil has been updated !');
        return redirect('/mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_mobil)
    {
        try {
            $deletedmobil = Mobil::findOrFail($id_mobil);

            $deletedmobil->delete();

            Alert::error('Success', 'Mobil has been deleted !');
            return redirect('/mobil');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, Mobil already used !');
            return redirect('/mobil');
        }
    }
}
