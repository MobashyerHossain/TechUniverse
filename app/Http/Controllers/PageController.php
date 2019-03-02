<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Other\Image;
use App\Models\Shop\Brand;

class PageController extends Controller
{
    public function index()
    {
        $banners = Image::where('type', '=', 'banner')->get();
        $brands = Brand::where('type', '=', 'Laptop')->inRandomOrder()->get();

        return view('base.pages.index')->with('banners', $banners)->with('brands', $brands);
    }
}
