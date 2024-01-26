<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\country;
use App\Models\Product;
use App\Models\Cart;
use App\Models\wishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function welcome(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    public function index(){
        $countries = country::all();
        return view('login', compact('countries'));
    }

    public function registration(Request $request){
        $countries = country::all();
        return view('registration', compact('countries'));
    }
    
    public function postlogin(Request $request){
        $request->validate([
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $checkloginCredentials = $request->only('mobile', 'password');
        if(Auth::attempt($checkloginCredentials)){
            return redirect('/')->withSuccess('you are successfully logged in');
        }
        return redirect('login')->withSuccess('your login credentials are incorrect');
    }

    public function postRegistration(Request $request){
        //return view('registration');
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $createUser = $this->create($data);
        return redirect('login')->withSuccess('You are registerd successfully');
    }

    public function create(array $data){
        return user::create([
            'name' => $data['name'],
            'country' => $data['country'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function logout(){
        session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function create_product(){
        return view('insert_product');
    }

    public function postInsert(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_subcategory' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        //$createUser = $this->create($data);
        //return redirect('login')->withSuccess('You are registerd successfully');

        
        if($request->hasFile('image')){
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] = $image_name;

            
        //     $path =  public_path(). 'public/images/products';
        //     $type = pathinfo($path, PATHINFO_EXTENSION);
        //     $data = file_get_contents($path);
        //    // $image = 'data:image/'. $type . ';base64,'. base64_encode($data);
        //     $image = base64_encode(file_get_contents($request->file('image')));

        //     $input['image'] = $image;


        }
        Product::create($input);
        session()->flash('message', $input['product_name'].' successfully saved');
        return redirect('/');
    }
   
    public function food_detail($id){
        $product = Product::find($id);
        return view('food_details', compact('product'));
    }
    
    public function add_cart(Request $request,$id){
        if(Auth::id())
        {
            $user=Auth::user();

            $product=Product::find($id);
            $cart = new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->mobile = $user->mobile;
            $cart->user_id = $user->id;

            $cart->product_name = $product->product_name;
            $cart->product_price = $product->product_price;
            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->product_quantity = $request->quantity;
            $cart->save();

            return redirect()->back();

        }else{
            return redirect('login');
        }
    }


    public function show_cart(){

        if(Auth::id()){

            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('show_cart', compact('cart'));

        }else{
            return redirect('login');
        }
        
    }
    
    
    public function remove_cart($id){
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    // public function cartCount(){
    //     $id=Auth::user()->id;
    //     $cartcount = cart::where('user_id','=',$id)->count();
    //     return response()->json(['count'=>$cartcount]);
    // }

    // public function cartCount(){
    //     if(Auth::id()){

    //         $id=Auth::user()->id;
    //         $cartcount=cart::where('user_id','=',$id)->count();
    //         return view('show_cart', compact('cartcount'));

    //     }else{
    //         return "";
    //     }
    // }

    public static function getCartNumber(){
        if(Auth::id()){
             $id=Auth::user()->id;
            $getCartNumber=cart::where('user_id','=',$id)->count('product_quantity');
            //$d = cart::select("SELECT sum(product_quantity) _product_quantity FROM `carts` where user_id=".Auth::user()->id);
            //return $getCartNumber;
        }else{
            return "0";
        }
        return $getCartNumber;
    }

    public function showWishList(){
        if(Auth::id()){

            $id=Auth::user()->id;
            $wish_list=wishList::where('user_id','=',$id)->get();
            return view('showWishList', compact('wish_list'));

        }else{
            return redirect('login');
        }
    }



    public function add_wish_list(Request $request,$id){
        if(Auth::id())
        {
            $user=Auth::user();
    
            $product=Product::find($id);
            $wish_list = new wishList;
    
            $wish_list->name = $user->name;
            $wish_list->email = $user->email;
            $wish_list->mobile = $user->mobile;
            $wish_list->user_id = $user->id;
    
            $wish_list->product_name = $product->product_name;
            $wish_list->product_price = $product->product_price;
            $wish_list->image = $product->image;
            $wish_list->product_id = $product->id;
    
            $wish_list->save();
    
            return redirect()->back();
    
        }else{
            return redirect('login');
        }
    }

    public function remove_wish_list($id){
        $wishList = wishList::find($id);
        $wishList->delete();
        return redirect()->back();
    }
    public static function countWishList(){
        if(Auth::id()){
             $id=Auth::user()->id;
            $countWishList=wishList::where('user_id','=',$id)->count('product_name');
            
        }else{
            return "0";
        }
        return $countWishList;
    }

    //account page
    public function account(){
        return view('account');
    }


}

