<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['title', 'description', 'product_image_path', 'bg_image_path', 'link', 'order'];
}