<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Other\Image;

class PageController extends Controller
{
    public function index()
    {
        $banners = Image::where('type', '=', 'banner')->get();

        return view('base.pages.index')->with('banners', $banners);
    }
}
