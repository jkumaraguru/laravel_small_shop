<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillabl =[
        'name'
    ];

    public function product()
    {
     
        return $this->hasMany(product::class);

    }
}
