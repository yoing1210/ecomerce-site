<?php

namespace App\Models;

use App\Models\PesananDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class validasi extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    public function pesanan() { 
        return $this->belongsTo(Pesanan::class); 
  }

}
