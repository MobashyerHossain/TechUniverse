<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Series;
use App\Models\Other\Image;

class Brand extends Model
{
    public function getLogo(){
        return Image::find($this->brand_logo);
    }
    
    public function getSeries(){
        return Series::where('brand_id', '=', $this->id)->get();
    }


}
