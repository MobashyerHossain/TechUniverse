<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('consumer')->user();

    //dd($users);

    return view('consumer.home');
})->name('home');

