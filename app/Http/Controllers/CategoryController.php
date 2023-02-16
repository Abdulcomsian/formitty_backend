<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function create()
    {
        //create new category
    }
    public function store(Request $request)
    {
        //store new category
    }
    public function edit($id)
    {
        //edit category
    }
    public function update(Request $request, $id)
    {
        //update category
    }
    public function destroy($id)
    {
        //delete category
    }

    //write the function for applying the coupon code
    public function applyCoupon(Request $request)
    {
        //check if the coupon code is valid
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if(!$coupon){
            return redirect()->route('cart.index')->withErrors('Invalid coupon code. Please try again.');
        }
        //check if the coupon code is valid for the user
        $user_id = Auth::id();
        $user_coupons = CouponUser::where('user_id', $user_id)->get();
        $coupon_ids = [];
        foreach($user_coupons as $user_coupon){
            $coupon_ids[] = $user_coupon->coupon_id;
        }
        if(!in_array($coupon->id, $coupon_ids)){
            return redirect()->route('cart.index')->withErrors('This coupon code is not valid for you.');
        }
        //check if the coupon code is valid for the products
        $cart_items = Cart::where('user_id', $user_id)->get();
        $cart_product_ids = [];
        foreach($cart_items as $cart_item){
            $cart_product_ids[] = $cart_item->product_id;
        }
        $coupon_products = CouponProduct::where('coupon_id', $coupon->id)->get();
        $coupon_product_ids = [];
        foreach($coupon_products as $coupon_product){
            $coupon_product_ids[] = $coupon_product->product_id;
        }
        if(!in_array($cart_product_ids, $coupon_product_ids)){
            return redirect()->route('cart.index')->withErrors('This coupon code is not valid for the products in your cart.');
        }
        //check if the coupon code is valid for the cart total
        $cart_total = Cart::where('user_id', $user_id)->sum('total');
        if($cart_total < $coupon->minimum_amount){
            return redirect()->route('cart.index')->withErrors('This coupon code is not valid for the amount in your cart.');
        }
        //check if the coupon code is expired
        $today = Carbon::today();
        if($today > $coupon->expiry_date){
            return redirect()->route('cart.index')->withErrors('This coupon code is expired.');
        }
        //check if the coupon code is used
        $coupon_used = CouponUser::where('coupon_id', $coupon->id)->where('user_id', $user_id)->first();
        if($coupon_used->used == 1){
            return redirect()->route('cart.index')->withErrors('This coupon code is already used.');
        //if valid, apply the coupon code
        }else{
            $coupon_used->used = 1;
            $coupon_used->save();
            $cart = Cart::where('user_id', $user_id)->first();
            $cart->coupon_id = $coupon->id;
            $cart->save();
            return redirect()->route('cart.index')->withMessage('Coupon code applied successfully.');
        }
        //if not valid, return back with error message
    }
}


