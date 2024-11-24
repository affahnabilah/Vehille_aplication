<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
       'bagian', 
       'nama_peminta', 
       'pimpinan1', 
       'pimpinan2',
       'pimpinan3',
       'pimpinan4',
       'pimpinan5',
       'pelaksana1', 
       'pelaksana2',
       'pelaksana3',
       'pelaksana4',
       'pelaksana5',
       'tujuan', 
       'keperluan', 
       'tanggal', 
       'jam_berangkat', 
       'jam_kembali', 
       'jenis_kendaraan', 
       'nopol', 
       'pengemudi', 
       'estimasi_bbm', 
       'estimasi_tol', 
       'manager_AKU_dan_umum',
       'manager_tanaman',
       'status'];
    
    }

