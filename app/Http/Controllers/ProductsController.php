<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Show the index page.
     *
     * @return Factory|View
     */
    public static function index()
    {
        return view('products.index');
    }


}
