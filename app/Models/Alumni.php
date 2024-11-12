<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table='alumnis';
    protected $fillable = ['nama', 'agama','jenis_kelmain','angkatan_id','no_tlp' ,'tahun_lulus', 'alamat', 'photo'];
        protected $guarded = [];

         function angkatan(){
            return $this->hasOne(Angkatan::class,'id','angkatan_id');
}
}
