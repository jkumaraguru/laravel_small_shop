<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Facades\Storage;

class Product extends Model
{
   use HasFactory;

   protected $fillable = [
       'name',
       'price',
       'category_id',
       'brand_id',
       'qty',
       'alert_stock',
       'image_path',
       'description',
];

public function category()
{
    return $this->belongsTo(category::class);
}


public function brand()
{
    return $this->belongsTo(brand::class);
}


public function GetImagePath()
{
    return env('DOMAIN_URL') . Storage::url($this->image_path);
}

}

