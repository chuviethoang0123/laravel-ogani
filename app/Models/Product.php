<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   

    protected $table = 'products';
    protected $fillable = [
        'user_id',
        'name',
        'code',
        'price',
        'quantity',
        'description',
        'images',
        'rate',
        'weight',
        'status',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');
    }
}
