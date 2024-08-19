<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|file|max:3024' // harus image, file ukuran max 3mb
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validatedData);
        // membuat pesan flash ke login
        toastr()->closeButton()->addSuccess('Products added successfuly!!');
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.edit_product', ['data' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|file|max:3024' // harus image, file ukuran max 3mb
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $product->update($validatedData);
        toastr()->closeButton()->addSuccess('Products update successfuly!!');
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Menghapus gambar jika ada
        if ($product->image) {
            Storage::delete($product->image);
        }

        // Menghapus produk dari database
        $product->delete();

        toastr()->closeButton()->addSuccess('Product deleted successfully!');
        return redirect()->back();
    }

    // mengaktifkan status
    public function updateStatus(Product $product)
    {
        $product->status = 'active';
        $product->save();

        toastr()->closeButton()->addSuccess('Product status updated to active!');
        return redirect()->back();
    }
}
