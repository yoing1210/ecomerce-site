<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Summary of Post
 */
class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = [];
    protected $with =['category'];

    // protected $with =['category','author'];
    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array  
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function image(){
        return $this->hasMany(image::class);
    }
}
