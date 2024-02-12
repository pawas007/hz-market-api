<?php

namespace App\Models;

use App\Traits\TitleSlugger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, TitleSlugger;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'in_stock',
        'price',
        'category_id'
    ];
}
