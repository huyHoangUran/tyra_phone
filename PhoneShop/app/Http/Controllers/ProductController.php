<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $all = Product::with('Category')->get();
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
            'product_name' => 'required|max:150|min:10',
            'price' => 'required|max:10|min:6',
            'quantity' => 'required|max:4|min:1',
            'description' => 'required',
            'category_id' => 'required'


        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $formFields = $request->except(['_token']);
        // Product::create($formFields);
        // $request->validate([

        // ]);
    }
}
