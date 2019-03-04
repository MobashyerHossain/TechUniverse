<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Other\ProductImage;
use App\Models\Other\Image;
use App\Models\Shop\Series;
use App\Models\Shop\Specification;

class Product extends Model
{
    public function getImages(){
        return ProductImage::where('product_id', '=', $this->id)->get();
    }

    public function getImage(){
        $all = ProductImage::where('product_id', '=', $this->id)->pluck('image_id');

        return Image::whereIn('id',$all)->inRandomOrder()->first();
    }

    public function getSeries(){
        return Series::find($this->series_id);
    }

    public function getSpecifications(){
        return Specification::where('product_id', '=', $this->id)->get();
    }

    public function getBuyingPrice(){
      return '$ '.(number_format((float)$this->buying_price, 2, '.', ''));
    }

    public function getDiscountedPrice(){
      $discountedprice = ($this->selling_price - ($this->current_discount*$this->selling_price));
      return '$ '.(number_format((float)$discountedprice, 2, '.', ''));
    }

    public function getDiscount(){
      return '- '.($this->current_discount*100).' %';
    }
}
