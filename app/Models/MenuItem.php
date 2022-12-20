<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menuitem_name',
        'menuitem_url',
        'menu_category_id',
        'menu_class'
    ];

    public function menucategory() {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id', 'id');
    }
}
