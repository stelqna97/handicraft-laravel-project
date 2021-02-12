<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use App\Product;
use App\Order_item;
use Auth;
use DB;

class CheckoutController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getCheckout()
    {
        $user=Auth::user();
        $cartss=Cart::where('user_email',$user->email)->get();
                $total=0;
        foreach ($cartss as $cart){
            $total+=$cart->price*$cart->quantity;
        }
        return view('checkout')->with('total',$total);
    }

    public function placeOrder(Request $request)
    {
        $user=Auth::user();
      
        $cartss=DB::table('carts')->where('user_email',$user->email)->first();
        foreach ($cartss as $cart){
           // $total=$cart->price*$cart->quantity;
           // $quan=$cart->quantity;
        }
        $data=array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['country']=$request->country;
        $data['post_code']=$request->post_code;
        $data['phone_number']=$request->phone_number;
        $data['notes']=$request->notes;

        $publisher_id=$cartss->publisher_id;
        $total=$cartss->price;
        $quan=$cartss->quantity;

        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();
        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $total,
            'quantity'        =>  $quan,
            'publisher_id'    =>   $publisher_id,
            'first_name'        =>  $data['first_name'],
            'last_name'         =>  $data['last_name'],
            'address'           =>  $data['address'],
            'city'              =>  $data['city'],
            'country'           =>  $data['country'],
            'post_code'         =>  $data['post_code'],
            'phone_number'      =>  $data['phone_number'],
            'notes'             =>  $data['notes']
        ]);
    
        if ($order) {
    
            $user=Auth::user();
            $items=Cart::where('user_email',$user->email)->get();
    
            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('product_name', $item->product_name)->first();
    
                $orderItem = new Order_item([
                    'product_id'    =>  $product['id'],
                    'quantity'      =>  $item->quantity,
                    'price'         =>  $item->price
                ]);
    
                $order->items()->save($orderItem);
            }
        }
        $cartss=Cart::where('user_email',$user->email)->delete();
    
        return redirect()->route('product.index')->with('success','Product Deleted Successfull');   }

   
}
