<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table="tbladmin";
    protected $fillable=['nama','alamat','telepon'];
}
