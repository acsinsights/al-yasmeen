<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteData;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $settings = WebsiteData::all();
        return view('admin.website-data.index', compact('settings'));
    }
    public function edit($slug)
    {
        $setting = WebsiteData::where('slug', $slug)->first();
        return view('admin.website-data.edit', compact('setting'));
    }
    public function update($slug)
    {
        $setting = WebsiteData::where('slug', "=", $slug)->first();

    }
}
