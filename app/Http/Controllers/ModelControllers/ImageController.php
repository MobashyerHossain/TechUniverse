<?php

namespace App\Http\Controllers\ModelControllers;

use App\Http\Controllers\Controller;
use App\Models\Other\Image;
use App\Models\MultiAuth\Consumer;
use Illuminate\Http\Request;
use Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeProfilePicture(Request $request)
    {
        if($request->hasFile('profile_pic')){
          // filename with .ext
          $filenameExt = $request->file('profile_pic')->getClientOriginalName();
          // filename without .ext
          $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
          // get .ext
          $extension = $request->file('profile_pic')->getClientOriginalExtension();
          // stored path
          $newfilename = $filename.'_'.time().'.'.$extension;
          // upload image
          $path = $request->file('profile_pic')->storeAs('public/images/Profile Pic/', $newfilename);
          //final pathname
          $finalpathname = 'storage/images/Profile Pic/'.$newfilename;

          $image = Image::create([
            'path' => $finalpathname,
            'type' => 'profile_pic',
          ]);

          if($request->Input('user_type') == 'consumer'){
            $consumer = Consumer::find(Auth::id());
            $consumer->profile_pic = $image->id;
            $consumer->save();
          }
          else if($request->Input('user_type') == 'admin'){
            $admin = Admin::find(Auth::guard('admin')->id());
            $admin->profile_pic = $image->id;
            $admin->save();
          }
          else{
            return redirect()->back();
          }

          return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
