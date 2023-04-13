<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index(Banner $banner,Product $product)
    {
        $banner =$banner->where('status',1)->get();
        
        $product = $product->orderBy('id','DESC')->get();
        return view('client.home',compact('banner','product'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        $data = $request->name;
        $searchProduct = Product::where('product_name', 'like','%'.$data.'%')->get();
        return view('client.search', compact('searchProduct'));
    }

    /**
     * Store a newly created resource i storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);
        return view('client.single_product',compact('product'));
        
    }

    public function list(Request $request)
    {
        $products = Product::orderBy('id','DESC')->get();
        return view('client.list_product',compact('products'));
        
    }
    
     public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            
        }else{
            $cart[$id]=[
                
                'name'=>$product->product_name,
                'image'=>$product->image,
                'price'=>$product->price,
                'quantity'=>1
                
            
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back();
    }    

    public function listCart(){
        // session()->forget('cart');
        return view('client.cart');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}