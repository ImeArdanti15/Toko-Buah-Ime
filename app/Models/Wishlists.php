<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'cart_id',
        'price',
        'amount',
        'quantity',
    ];
    public function product() {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
