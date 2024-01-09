<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

   
}
