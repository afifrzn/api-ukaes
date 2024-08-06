<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_pasien',
        'obat_id',
        'kelas',
        'keluhan',
        'keterangan'
    ];
    public function obatName()
    {
        return $this->belongsTo(Obat::class, 'obat_id');
    }
}
