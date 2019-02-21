<?php

namespace App\Http\Controllers\Consumer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/consumer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('consumer.auth:consumer');
    }

    /**
     * Show the Consumer dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('consumer.home');
    }

}