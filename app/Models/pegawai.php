<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_pegawai',
        'nomor_pegawai',
        'tanggal_bergabung',
    ];
}
