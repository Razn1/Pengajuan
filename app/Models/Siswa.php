<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'tempat_pkl',
        'no_telp',
        'email',
        'password'
    ];
    
    protected $table = 'siswas';

    protected $primaryKey = 'nis';

    public function siswa(){
        return $this->hasMany(siswa::class,'nis','nis');
    }
}
