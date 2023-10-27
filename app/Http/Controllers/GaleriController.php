<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $product = Product::get();
        return view('Admin/galeri', ['benda'=>$product]);
    }
}
