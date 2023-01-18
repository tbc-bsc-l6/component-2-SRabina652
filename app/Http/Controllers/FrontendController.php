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
    public function displayAll(Request $request){
        $search =$request['search']??"";
        if($search != ""){
            $allProducts=Product::where('ProductName','LIKE',"%$search%")->orWhere('ProductPrice','=',$search)->paginate(6);
            return view('allfoods', compact('allProducts','search'));
    
        }else{
            $allProducts=Product::latest()->paginate(6);
            return view('allfoods', compact('allProducts','search'))->with('i',(request()->input('page',1) - 1)*12);
        }
        return view('allfoods', compact('allProducts','search'));
    
        
    }
    public function adminDashboard(){
        return view('admin.layout.adminlayout');
    }
}
