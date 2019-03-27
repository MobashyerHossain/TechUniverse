<?php

namespace App\Models\MultiAuth;

use App\Notifications\ConsumerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\Models\Transaction\CartItem;
use App\Models\Transaction\Invoice;
use App\Models\Other\Image;
use App\Models\Other\Address;
use App\Models\Other\PhoneNumber;
use App\Models\Shop\WishList;
use App\Models\Shop\ProductView;

class Consumer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ConsumerResetPassword($token));
    }

    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }

    public function getProfilePic(){
        if(Image::find($this->profile_pic)){
          return Image::find($this->profile_pic);
        }
        else{
          return Image::find(1);
        }
    }

    //consumers cart methods
    public function getCartProducts(){
        return CartItem::where('consumer_id', $this->id)->where('sold', false)->orderBy('created_at', 'desc')->get();
    }

    public function getTotalAmountProducts(){
        return CartItem::where('consumer_id', $this->id)->where('sold', false)->sum('quantity');
    }

    public function getTotalCostPerCart(){
        $carts = CartItem::where('consumer_id', $this->id)->where('sold', false)->get();
        $total = 0;

        foreach ($carts as $cart) {
          $total += (double)substr($cart->getTotalPartCost(), 2, -4);
        }
        return (number_format((float)$total, 2, '.', ''));
    }

    public function getAddress(){
        return Address::find($this->address_id);
    }

    public function getPhoneNumber(){
        return PhoneNumber::find($this->phone_number_id);
    }

    public function getWishList(){
        return WishList::where('consumer_id', $this->id)->get();
    }

    public function getViewedProducts(){
        return ProductView::where('consumer_id', $this->id)->orderBy('created_at', 'desc')->limit(6)->get();
    }

    public function getDateOfBirth(){
        return Carbon::parse($this->date_of_birth)->format('jS F Y');
    }

    public function getInvoices(){
        return Invoice::where('consumer_id', $this->id)->orderBy('created_at', 'desc')->get();
    }
}
