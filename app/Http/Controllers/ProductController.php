<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\product;
use storage\app\public;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('admin/product', ['barang' => $product]);
    }
    public function create(request $request)
    {
        $newName = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $product = Product::create($request->all());

        return redirect('/product');
    }
    public function edit(request $request, $id){
		$product = Product::findOrFail($id);
		return view('admin/product-update', ['product' =>$product]);
	}
    public function update(request $request, $id){
		
		$product = Product::findOrFail($id);
		$product->update($request->all());
		return redirect('/product');
	}
    public function detail(request $request, $id) {
        $product = Product::findOrFail($id);
		return view('admin/product-detail', ['product' =>$product]);
    }
    public function delete($id)
    {

        $product = product::findOrFail($id);
        return view('admin/product-delete', ['product' => $product]);
    }
    public function destroy($id)
{
    $deletedProduct = Product::findOrFail($id);

    // Hapus foto terkait dari storage jika ada
    if (!empty($deletedProduct->image)) {
        Storage::delete('public/photo/' . $deletedProduct->image);
    }

    // Hapus produk dari database
    $deletedProduct->delete();

    return redirect('/product');
}
}
    