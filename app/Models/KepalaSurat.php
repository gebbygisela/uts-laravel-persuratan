<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSurat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kop',
        'alamat_kop',
        'nama_tujuan',
        'id_user'

    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
