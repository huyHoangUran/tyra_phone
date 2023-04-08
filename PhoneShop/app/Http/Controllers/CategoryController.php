<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $cate = Category::get();
        return view('admin.category.category', compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'max:150', Rule::unique('categories', 'name')]
        ]);
        Category::create($formFields);
        return redirect()->route('admin.category');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd($request->id);
        $formFields = $request->validate([
            'name' => 'required|max:150|min:4'
        ]);
        $category->find($request->id)->update($formFields);

        return redirect()->route('admin.category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Category $category)
    {
        $category->find($request->id)->delete();
        return redirect()->route('admin.category');
    }
}
