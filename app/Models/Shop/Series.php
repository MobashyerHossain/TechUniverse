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
        $ProIds = Product::where('series_id', '=', $this->id)->pluck('id');
        $proImg = ProductImage::whereIn('product_id', $ProIds)->inRandomOrder()->first();
        $img = Image::find($proImg->image_id);
        return $img;
    }

    public function getProducts(){
        return Product::where('series_id', '=', $this->id)->get();
    }

    public function getBrand(){
        return Brand::find($this->brand_id);
    }
}
