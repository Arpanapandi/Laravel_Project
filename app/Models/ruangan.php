<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
   protected $table = "ruangan";
   protected $fillable = ['nama', 'kapasitas']; //
}
