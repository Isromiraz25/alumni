<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ust extends Model
{
    use HasFactory;
    protected $table='ust';
    protected $fillable = ['name', 'posisi','jenis_kelamin','tempat_lahir','tanggal_lahir','no_tlp' ,'alamat', 'photo'];
}
