<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    //to create model  vv
    //php artisan make:model category
    //vv اضافة الحقل
    protected $fillable = ['name', 'description', 'parent_id'];
    //vv منع حقل من الاضافة
    //protected $guarded=[];
    //hasMany = many
    //belongsto = one
    public function products()
    {
        return $this->hasMany(product::class, 'category_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')
            //vv only in belongsto()
            ->withDefault([
                'name' => 'No Parent',
            ]);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
