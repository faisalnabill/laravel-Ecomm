<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //use HasFactory;
    protected $fillable = ['name', 'description', 'category_id', 'image', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')
            ->withDefault([
                'name' => 'No Category',
            ]);
    }
    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'products_tags',
            'product_id',
            'tag_id',
        );
    }
}
