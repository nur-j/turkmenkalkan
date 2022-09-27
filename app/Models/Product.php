<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['title_tm', 'title_en', 'title_ru', 'description', 'price', 'category_id'];

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
