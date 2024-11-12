<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table='siswa';
    protected $fillable = ['name', 'email','alamat','no_tlp' ,'jenis_kelamin','tempat_lahir','tanggal_lahir','ijazah','kk','photo'];
}
