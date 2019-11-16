<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table="tblinput";
    protected $fillable=['idk','alamat','kdpos','klasifikasi','fasilitas','ukuran','luas','idn','harga','gambar'];
}
