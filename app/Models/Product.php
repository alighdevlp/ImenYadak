<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'image', 'price', 'count', 'popular', 'suggest', 'description'];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function product_images() {
        return $this->hasMany(ProductImage::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
