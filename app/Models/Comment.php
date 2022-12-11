<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'profile', 'user_id', 'product_id', 'status'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
