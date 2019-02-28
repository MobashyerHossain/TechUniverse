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

    public function getSeries(){
        return Series::find($this->series_id);
    }

    public function getSpecifications(){
        return Specification::where('product_id', '=', $this->id)->get();
    }
}
