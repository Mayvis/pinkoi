<?php

namespace App\Http\Controllers;

use App\Banner;

class BannersController extends Controller
{
    public function store(Banner $banner)
    {
        request()->validate([
            'banner' => ['required', 'image'],
        ]);

        $banner->insert([
            'banner_path' => request()->file('banner')->store('banners', 'public')
        ]);

        return back();
    }
}
