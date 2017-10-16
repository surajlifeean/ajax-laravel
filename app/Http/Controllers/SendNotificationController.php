<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Product;

use Session;

use App\Notifications\NewProducts;

class SendNotificationController extends Controller
{
    public function send()
    {

    	$user=User::first();

    	$product=Product::first();

        $user->notify(new NewProducts($product));

        Session::flash('success', 'Notification Sent successfully!');

        return redirect()->route('home');
    }
}
