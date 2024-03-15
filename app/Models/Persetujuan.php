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
        return $this->hasMany(Persetujuan::class, 'id','id');
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nis','nis');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
