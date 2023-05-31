<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name', 'price', 'old_price', 'description', 'user', 'color', 'category',
        'stock', 'created_at', 'updated_at'
    ];  

    protected $guarded = ['id'];


    public function colors(){
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function sizes(){
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function images(){
        return $this->hasMany(ProductImages::class, 'product');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function caty(){
        return $this->belongsTo(Category::class, 'category');
    }

}
