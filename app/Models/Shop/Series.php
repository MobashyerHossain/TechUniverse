<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Product;
use App\Models\Shop\Brand;
use App\Models\Other\Image;

class Series extends Model
{
    public function getImage(){
        $img = $this->getProducts()->getImages();
        return $img;
    }

    public function getProducts(){
        return Product::where('series_id', '=', $this->id)->get();
    }

    public function getBrand(){
        return Brand::find($this->brand_id);
    }
}
