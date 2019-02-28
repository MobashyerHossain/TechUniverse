<?php

namespace App\Models\Other;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function getLogoFirstIndex(){
        return (Image::where('type', '=', 'brand_logo')->first())->id;
    }

    public function getProductImageFirstIndex(){
        return (Image::where('type', '=', 'product_image')->first())->id;
    }
}
