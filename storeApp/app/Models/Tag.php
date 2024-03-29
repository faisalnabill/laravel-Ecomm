<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function products()
    {
        return $this->belongsToMany(
            product::class,
            'products_tags',
            'tag_id',
            'product_id',
        );
    }
}
