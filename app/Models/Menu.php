<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'menu_name', 
        'menu_url', 
        'menu_order', 
        'menu_mode'
    ];

    public function menu_categories() {
        return $this->hasMany(MenuCategory::class);
    }
}
