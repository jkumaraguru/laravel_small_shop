<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'qty',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    public function totalPrice()
    {
        return $this->qty = $this->product->price;
    }


    public static function grandTotal($customerId)
    {
        $cartItems = Cart::where('customer_id', $customerId)->get();
        $total = $cartItems->sum(function ($item) {
            return $item->totalPrice();
            
        });


        return $total;
    }


}
