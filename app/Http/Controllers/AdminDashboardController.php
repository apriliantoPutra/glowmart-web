<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        // menghitung t0tal product
        $totalProduct= Product::count();

        // menghitung t0tal user
        $totalUser= User::count();

        // menghitung produk active
        $productActive= Product::where('status', 'active')->count();

        // menghitung user active
        $userActive = User::where('is_admin', false)
                  ->where('is_approved', true)
                  ->count();


        $products = Product::latest()->take(10)->get(); // Mengambil 5 produk terbaru

        return view('admin/dashboard', compact('totalProduct', 'totalUser', 'productActive', 'userActive', 'products'));
    }
}
