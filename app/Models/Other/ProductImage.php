<?php

namespace App\Models\Other;

use Illuminate\Database\Eloquent\Model;

use App\Models\Other\Image;

class ProductImage extends Model
{
    public function getImage(){
        return Image::find($this->image_id);
    }
}
