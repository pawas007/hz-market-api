<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;


trait TitleSlugger
{
    /**
     * @return Attribute
     */
    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn($value) => [
                'title' => $value,
                'slug' => Str::slug($value),
            ],
        );
    }
}
