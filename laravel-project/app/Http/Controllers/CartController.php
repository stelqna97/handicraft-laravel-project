<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use DB;
use Auth;



class CartController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCart()
    {
        
        $user=Auth::user();
        $cartss=Cart::where('user_email',$user->email)->get();
        $total=0;
        foreach ($cartss as $cart){
            $total+=$cart->price*$cart->quantity;
        }
        
        $carts = Cart::where('user_email', $user->email)->get();
       

        return view('cart')->with('carts',$carts)->with('total',$total);
    }

    public function removeItem($id)
    {
       /* Cart::remove($id);
    
        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');*/
     

        $cart=DB::table('carts')->where('id',$id)->delete();
        return redirect()->route('cart')->with('success','Product Deleted Successfull');
    }

    public function clearCart()
{
    \App\Cart::query()->delete();

    return redirect('/');
}

public function updateQuantity($id,$quantity){
    
    $sku_size=DB::table('carts')->select('product_code','size','quantity')->where('id',$id)->first();
    $stockAvailable=DB::table('product_att')->select('stock')->where(['sku'=>$sku_size->product_code,
        'size'=>$sku_size->size])->first();
    $updated_quantity=$sku_size->quantity+$quantity;
    if($stockAvailable->stock>=$updated_quantity){
        DB::table('carts')->where('id',$id)->increment('quantity',$quantity);
        return back()->with('message','Update Quantity already');
    }else{
        return back()->with('message','Stock is not Available!');
    }


}
}
