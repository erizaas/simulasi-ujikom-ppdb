<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nama', 'email', 'jenis_kelamin', 'asal_sekolah', 'minat_jurusan', 'foto_siswa'
    ];
}
