<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'deskripsi',
        'image',
        'kategori',
        'stok',
    ];

    protected $table = 'product';
}
