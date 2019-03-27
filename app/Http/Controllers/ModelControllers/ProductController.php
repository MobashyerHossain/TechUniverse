<?php

namespace App\Http\Controllers\ModelControllers;

use App\Http\Controllers\Controller;
use App\Models\Shop\Product;
use Illuminate\Http\Request;
use App\Models\Other\PhoneNumber;
use App\Models\Other\Address;
use App\Models\Transaction\Invoice;
use App\Models\MultiAuth\consumer;

class ProductController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('base.pages.singleProduct')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    //payment complete
    public function checkOut(Request $request){
        if($request->Input('payment_option') == 'cradit card'){
          $this->validate($request, [
            'terms' => 'accepted',
          ]);
        }

        else{
            $this->validate($request, [
              'local_address' => 'required|max:199',
              'phone_number' => 'required|max:30',
              'postal_code' => 'required|max:6',
              'city' => 'required|max:20',
              'country' => 'required|max:20',
              'terms' => 'accepted',
            ]);
            $consumer = Consumer::find(Auth::id());
            if($consumer->address_id){
              $address = Address::find($consumer->address_id);
              $address->local = $request->input('local_address');
              $address->postal_code = $request->input('postal_code');
              $address->city = $request->input('city');
              $address->country = $request->input('country');
              $address->save();
            }
            else {
              $address = new Address();
              $address->local = $request->input('local_address');
              $address->postal_code = $request->input('postal_code');
              $address->city = $request->input('city');
              $address->country = $request->input('country');
              $address->save();
              $consumer->address_id = $address->id;
              $consumer->save();
            }

            if($consumer->phone_number_id){
              $phone = PhoneNumber::find($consumer->phone_number_id);
              $phone->number = $request->input('phone_number');
              $phone->save();
            }
            else {
              $phone = new PhoneNumber();
              $phone->number = $request->input('phone_number');
              $phone->save();
              $consumer->phone_number_id = $phone->id;
              $consumer->save();
            }
            $consumer->save();
        }

        $carts = Auth::user()->getCartProducts();

        $invoce = new Invoice();
        $invoce->total_amount = Auth::user()->getTotalCostPerCart();
        $invoce->consumer_id = Auth::id();
        $invoce->payment_method = $request->Input('payment_option');
        $invoce->save();

        foreach ($carts as $cart) {
            $cart->sold = true;
            $cart->invoice_id = $invoce->id;
            $cart->save();
        }
        try {
          //send digital reciept mail
          Mail::to(Auth::user()->email)->send(new DigitalReciept($invoce));
        } catch (\Exception $e) {

        }

        return redirect()->back()->with('product_check_out', 'You successfully purchased the the products in your cart. The products will be delivered to your home in 3-4 days.');
    }
}
