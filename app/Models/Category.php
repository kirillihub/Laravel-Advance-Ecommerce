<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name_en',
        'category_name_bn',
        'category_slug_en',
        'category_slug_bn',
        'category_icon',
        'category_image'
    ];

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function subsubcategory()
    {
        return $this->hasManyThrough(SubSubCategory::class,SubCategory::class,'category_id', 'subcategory_id', 'id');
    }
}