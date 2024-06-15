<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    use HasFactory;

    protected $table = 'tanyas';

    protected $fillable = [
        // 'nama',
        // 'email',
        // 'handphone',
        'user_id',
        'judul',
    ];

    public function kakastro()
    {
        return $this->hasOne(Kakastro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
