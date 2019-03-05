<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Series;
use App\Models\Shop\Category;
use App\Models\Other\Image;

class Brand extends Model
{
    public function getLogo(){
        return Image::find($this->logo);
    }

    public function getCategory(){
        return Category::find($this->category_id);
    }

    public function getSeries(){
        return Series::where('brand_id', '=', $this->id)->inRandomOrder()->get();
    }


}
