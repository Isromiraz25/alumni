<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mudir extends Model
{
    use HasFactory;
    protected $table='mudir';
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','wasiat','photo'];
}
