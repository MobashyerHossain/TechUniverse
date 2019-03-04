<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Other\Image;
use App\Models\Shop\Brand;

class Category extends Model
{
    public function getImage(){
        return Image::find($this->image_id);
    }

    public function getBrands(){
        return Brand::where('category_id', '=', $this->id)->get();
    }
}
