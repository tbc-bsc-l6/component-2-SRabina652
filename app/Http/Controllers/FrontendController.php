<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('welcome', compact('category'));
    }
    public function product($name)
    {
        $productCategory = Category::where('name', $name)->first();
        if ($productCategory) {
            $products = $productCategory->products()->get();
            return view('food', compact('products', 'productCategory'));
        } else {
            return redirect()->back();
        }
    }
    public function displayAll(){
        $allProducts=Product::all();
        return view('allfoods', compact('allProducts'));
    }
}
