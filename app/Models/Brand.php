<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }


    public function GetLogoImage() 
    {
        return env('DOMAIN_URL').Storage::url($this->image_path);   
    }


    public function DeletLogoImage()
    {

        if (Storage::exists($this->image_path))
        {
            Storage::delete($this->image_path);
        }
    }
}
