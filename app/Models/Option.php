<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'logo', 'icon', 'footer_title', 'footer_description', 'footer_copyright'];
}
