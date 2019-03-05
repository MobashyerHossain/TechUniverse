<?php

namespace App\Http\Controllers\OtherControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Other\Image;
use App\Models\Shop\Category;

class PageController extends Controller
{
    public function index()
    {
        $banners = Image::where('type', '=', 'banner')->get();
        $categories = Category::all();

        return view('base.pages.index')->with('banners', $banners)->with('categories', $categories);
    }
}
