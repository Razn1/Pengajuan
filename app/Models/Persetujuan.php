<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persetujuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'id_user',
        'id_pengajuan',
        'tanggal_acc',
        'status'
    ];
    protected $table = 'persetujuans';
    public function persetujuan(){
        return $this->hasMany(Persetujuan::class, 'id_persetujuan','id');
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nis','nis');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
    public function pengajuan(){
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan','id');
    }
}
