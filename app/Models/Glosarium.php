<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glosarium extends Model
{
    use HasFactory;

    protected $table = 'glosariums';

    protected $fillable = [
        'title',
        'gambar',
        'body',
        // 'published_at',
        
    ];
}
