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
        dd('done');
    }
}