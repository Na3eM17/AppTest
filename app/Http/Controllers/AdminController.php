<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::with('products')->get();

        return view('admin.dashboard', [
            'users' => $users,
            'usersCount' => $users->count(),
            'productsCount' => $users->sum(function($user){
                return $user->products->count();
            }),
        ]);
    }

    public function ShowUserData($id)
    {
        // Fetch the user along with their products
        $user = User::with('products')->findOrFail($id);

        // Pass the data to a view
        return view('admin.users.show', compact('user'));
    }


    // Show the add product form for a specific user
    public function addProductForm($id)
    {
        $user = User::findOrFail($id);
        $products = Product::all();
        return view('admin.users.add-product', compact('user','products'));
    }

    // Store the new product for the user
   public function storeUserProduct(Request $request, $id)
{
    $user = User::findOrFail($id);

    // إذا تم إرسال product_id من الفورم الأول
    if($request->has('product_id')) {
        $product = Product::findOrFail($request->product_id);
        $product->user_id = $user->id;  // ربط المنتج بالمستخدم
        $product->save();
    } else {
        // إنشاء منتج جديد
        $request->validate([
            'Pname' => 'required|string|max:255',
            'produseDate' => 'required|date',
            'expirDate' => 'required|date|after_or_equal:produseDate',
        ]);

        $user->products()->create([
            'Pname' => $request->Pname,
            'produseDate' => $request->produseDate,
            'expirDate' => $request->expirDate,
        ]);
    }

    return redirect()->route('ShowData', $user->id)
                     ->with('success', 'Product added successfully!');
}

}
