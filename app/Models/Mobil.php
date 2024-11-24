<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mobil';

    protected $table = 't_mobil';

    protected $guarded = ['id_mobil'];
}
