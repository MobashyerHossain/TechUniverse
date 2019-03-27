<?php

namespace App\Http\Controllers\MultiAuthControllers;

use App\Models\MultiAuth\Consumer;
use App\Models\MultiAuth\Admin;
use App\Http\Controllers\MultiAuthControllers\ConsumerControllers\ConsumerLoginController;
use App\Http\Controllers\MultiAuthControllers\AdminControllers\AdminLoginController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
          'logemail' => 'required|email',
          'logpassword' => 'required'
        ]);

        //Validate type of user
        if (count(Admin::where('email', $request->Input('logemail'))->first()) > 0) {
          //if successfull, tha0n redirect to Admin Dashboard
          return (new AdminLoginController)->login($request);
        }
        else if (count(Consumer::where('email', $request->Input('logemail'))->first()) > 0) {
          //if successfull, than redirect to Consumer Dashboard
          return (new ConsumerLoginController)->login($request);
        }
        else {
          //if unsuccessfull, return with error
          return redirect()->back()->withInput($request->only('logemail', 'remember'))->with('user_not_found', 'Please check you Email or Register if you are new');
        }
    }
}
