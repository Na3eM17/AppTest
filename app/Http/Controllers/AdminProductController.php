<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $users = User::all(); // لإختيار صاحب المنتج
        return view('admin.products.create', compact('users'));
    }

    public function store(Request $request)
    {
        Product::create([
            'Pname' => $request->Pname,
            'produseDate' => $request->produseDate,
            'expirDate' => $request->expirDate,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        $users = User::all();
        return view('admin.products.edit', compact('product', 'users'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'Pname' => $request->Pname,
            'produseDate' => $request->produseDate,
            'expirDate' => $request->expirDate,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
