<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengalamanKerja extends Model
{
    protected $table ='pengalaman_kerja';
    protected $primarykey ='id';
    protected $fillable =[
        'nama','jabatan','tahun_masuk','tahun_keluar',
    ];
    //
}
