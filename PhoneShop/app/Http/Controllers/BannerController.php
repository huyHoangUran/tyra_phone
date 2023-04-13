<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(Banner $banner)
    {
        $banners = $banner->all();
        return view('admin.banner.banner', compact('banners'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request,Banner $banner){
        $formFields = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'status' => 'required',
            
        ]);
        $formFields['user_id'] =1;

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('banners', 'public');
        }
        $banner->create($formFields);
        return redirect()->route('admin.banner');
    }
    public function edit(Request $request){
        $id = $request->id;
        $data = Banner::where('id', $id)->first();
        return view('admin.banner.edit', compact('data'));
    }
    public function update(Request $request,Banner $banner){
        $formFields = $request->validate([
            'status'=> 'required',
            
        ]);
        $banner->find($request->id)->update($formFields);

        return redirect()->route('admin.banner');
    }
    public function destroy(Request $request, Banner $banner){
        $banner->find($request->id)->delete();
        return redirect()->route('admin.banner');
    }
}