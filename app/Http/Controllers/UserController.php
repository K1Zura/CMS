<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('user.beranda', ['products' => $products]);
    }

}