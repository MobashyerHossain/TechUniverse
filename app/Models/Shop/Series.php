<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Product;
use App\Models\Shop\Brand;
use App\Models\Other\Image;
use App\Models\Other\ProductImage;

class Series extends Model
{
    public function getImage(){
        $randProduct = $this->getProducts()->random();
        return $randProduct->getImage();
    }

    public function getProducts(){
        return Product::where('series_id', '=', $this->id)->inRandomOrder()->get();
    }

    public function getBrand(){
        return Brand::find($this->brand_id);
    }
}
