<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function validasi()
    {
        return $this->hasOne(validasi::class);
    }
}
