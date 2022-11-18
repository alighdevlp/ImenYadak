<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = ['menucategory_name'];

    public function menuitems() {
        return $this->hasMany(MenuItem::class, 'menu_category_id', 'id');
    }
}
