<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infosantri extends Model
{
    use HasFactory;
    protected $table='infosantris';
    protected $fillable = ['judul','tanggal','deskripsi','photo'];
   // protected $guarded = [];
}
