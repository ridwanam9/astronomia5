<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    use HasFactory;

    protected $table = 'tanyas';

    protected $fillable = [
        'nama',
        'email',
        'handphone',
        'judul',
    ];

    public function kakastro()
    {
        return $this->hasOne(Kakastro::class);
    }
}
