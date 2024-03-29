<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadLaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'judul',
        'laporan',
    ];

    public function siswa (){
        return $this->belongsTo(Siswa::class,'nis','nis');
    }
}
