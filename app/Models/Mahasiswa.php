<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // <-- tambahkan ini
    protected $fillable = [
        'nama', 
        'nim', 
        'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
