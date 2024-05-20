<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaTandatangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_tandatangan',
        'jabatan',
        'nip',
    
    ];
}
