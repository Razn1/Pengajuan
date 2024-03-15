<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable=[
        'nis',
        'judul_laporan',
        'proposal',
        'status'
    ];
    protected $table = 'pengajuans';
    public function pengajuan(){
        return $this->hasMany(Pengajuan::class, 'id','id');
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nis','nis');
    }
}
