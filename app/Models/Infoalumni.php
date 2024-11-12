<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoalumni extends Model
{
    use HasFactory;
    protected $table='infoalumnis';
    protected $fillable = ['judul','tanggal','deskripsi','photo'];
   // protected $guarded = [];
}
