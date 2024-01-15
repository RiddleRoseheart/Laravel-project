<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'rating',
        'image',
    ];
    public function getImageUrl()
    {
        return asset("storage/product_images/{$this->image}");
    }
//relation with our comments
    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
