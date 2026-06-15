<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    // protected $table = 'penduduk';
    protected $fillable = ['nik', 'nama', 'alamat'];

    public function surats(){
        return $this->hasMany(Surat::class);
    }
}
