<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $all = Product::orderBy('id','DESC')->with('Category')->get();
        // $all = Product::get();
        // $all = $all->Category;
        return view('admin.product.products', compact('all'));
    }

    public function create()
    {
        $listCategories = Category::get();
        return view('admin.product.create', compact('listCategories'));
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'product_name' => 'required|max:150|min:6',
            'price' => 'required|max:10|min:6',
            'quantity' => 'required|max:4|min:1',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required'


        ]);
        
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Product::create($formFields);
        return redirect()->route('admin.product');  //  
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Product::where('id', $id)->first();
        $cate = Category::all();
        return view('admin.product.edit', compact('data', 'cate'));
    }

    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'product_name' => 'required|max:150|min:6',
            'price' => 'required|max:10|min:6',
            'quantity' => 'required|max:4|min:1',
            'description' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $product->find($request->id)->update($formFields);
        return redirect()->route('admin.product');
    }

    public function archive()
    {
        $all = Product::onlyTrashed()
            ->get();
        return view('admin.product.archive', compact('all'));
    }

    public function destroy(Request $request, Product $product)
    {
       
        $product->find($request->id)->delete();
        // dd(Product::first());
        return redirect()->route('admin.product');
    }
}