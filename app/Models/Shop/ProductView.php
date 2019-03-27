<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class ProductView extends Model
{
    public function getViewedProductList(){
        return ProductView::find($this->consumer_id);
    }
}
