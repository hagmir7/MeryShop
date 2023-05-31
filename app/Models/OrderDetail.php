<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'totla', 'quantity'];


    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }


    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function getTotal(){
        return $this->product->price * $this->quantity;
    }

    protected static function booted()
    {
        static::created(function ($model) {
            $model->total = $model->quantity * $model->product->price;
            $model->save();
        });

    }

    
    public function sizes(){
        return $this->belongsToMany(Size::class, 'order_detail_sizes', 'order_details_id');
    }

    public function colors(){
        return $this->belongsToMany(Color::class, 'order_detail_colors', 'order_details_id');
    }
}