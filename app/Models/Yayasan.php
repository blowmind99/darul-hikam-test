<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'telepon'
    ];

    public function sekolah(){
        return $this->hasMany(Sekolah::class);
    }
}
