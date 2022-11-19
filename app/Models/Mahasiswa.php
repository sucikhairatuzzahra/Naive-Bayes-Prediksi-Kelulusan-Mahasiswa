<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'data_testing';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nim', 'nama', 'ipk', 'jurusan_sekolah',
        'prodi', 'ekonomi'
    ];
}
