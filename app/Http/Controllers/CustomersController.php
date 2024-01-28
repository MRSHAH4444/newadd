<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Order;
use App\Models\size;
use App\Models\Address;
use App\Models\customers;
use App\Models\product;
use App\Models\feedback;
use App\Models\Cart;
use App\Models\Checkout;

use Illuminate\Http\Request;
use Hash;
use DB;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('customers.login');
    }
    function view_product()
    {
        $data = product::inRandomOrder()->limit(12)->get();
        return view('customers.view_product', compact('data'));
    }


    function view_product_details($id)
    {
        $pro = product::all();
        $si = size::all();
        $product = product::find($id);
        $cat = category::find($id);
        return view('customers.view_product_details', compact('product', 'cat', 'pro', 'si'));
    }

  
    function feedback_index()
    {
        return view('customers.feedback_index');
    }
    function feedback_store(Request $req)
    {
        $feedback = new feedback();
        $feedback->name = $req->name;
        $feedback->email = $req->email;
        $feedback->msg = $req->msg;
        $feedback->save();
        return redirect('/customers/feedback_index');
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $result = customers::where(['email' => $email, 'password' => $password])->get();
        if (isset($result['0']->id)) {
            $request->session()->put('customers_login', true);
            $request->session()->put('customers_login', $result['0']->id);
            return redirect('/customers/layout');
        } else {
            $request->session()->has('error', 'please enter valid login details');
            //  return redirect('/admin/login');
            return back()->with('error', 'please enter valid login details.');
        }
    }


    function register()
    {
        return view('customers.register');
    }
    function register_code(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'contact_no' => 'required',


        ]);

        $customers = new customers();
        $customers->first_name = $request->first_name;
        $customers->last_name = $request->last_name;
        $customers->email = $request->email;
        $customers->password = $request->password;
        $customers->address = $request->address;
        $customers->contact_no = $request->contact_no;
        $customers->profile_image = time() . '.' . $request->profile_image->extension();
        $customers->state = $request->state;
        $customers->city = $request->city;
        $customers->pincode = $request->pincode;

        $customers->save();
        return redirect('customers/login');
    }
     public function dashboard()
     {
         return view('customers.dashboard');
     }

    public function layout()
    {
        return view('customers.layout');
    }


    function add_to_cart(Request $request)
    {
        $cart =  new Cart();
        $cart->product_id = $request->product_id;
        $cart->qty = $request->qty;
        $cart->save();
        return redirect("customers/viewcart");
    }

    function viewcart()
    {
 
        $product = Cart::join('products', 'products.id', '=', 'carts.product_id')

            ->get(['products.id as product_id', 'products.product_name', 'products.image', 'products.product_cost', 'carts.id as c_id', 'carts.qty']);
        $random = Product::all();
        return view("customers.viewcart", compact('product', 'random'));
    }

    function cartdelete($id)
    {
        $cart = Cart::find($id);
        // return $cart;
        $cart->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    function checkout()
    {
        // if (isset(Auth::user()->id)) {
            $add = Address::all();
            return view("customers.checkout", compact('add'));
        // } else {
            // return redirect("/myaccount");
        // }
    }

    function checkoutcode(Request $request)
    {
        $request->validate([
            'quantity' => 'required',
        ]);

        $cart = Cart::where('user_id', '=', $mac)->get();
        // return $cart;
        foreach ($cart as $carts) {
            $order = new Order();
            $order->product_id = $carts->product_id;
            $order->user_id = Auth::user()->id;
            $order->quantity = $carts->quantity;
            $order->quantity = $carts->quantity;
            $order->save();
            $o_id = $order->id;

            $checkout = new Checkout();
            $checkout->o_id = $o_id;
            $checkout->user_id = Auth::user()->id;
            $checkout->address_id = $request->address_id;
            $checkout->save();
        }
        //return view("Front_end.home");
        return redirect()->back()->with('thanks', 'your order has been placed and will arrive in few days ');
    }
    function address()
    {
        return view('customers.address');
    }
    function addresscode(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pin' => 'required',
            'phone' => 'required',

        ]);
        $add = new Address();
        $add->user_id = 1;
        $add->email = $request->email;
        $add->firstname = $request->firstname;
        $add->address = $request->address;
        $add->city = $request->city;
        $add->state = $request->state;
        $add->pin = $request->pin;
        $add->phone = $request->phone;
        $add->save();

        return redirect()->back()->with('success', 'Address Added successfully');
    }
}
