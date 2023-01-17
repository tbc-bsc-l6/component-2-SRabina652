<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function validateAll(Request $request){
        $request->validate([
            'ProductName' => ['required', 'string', 'max:255'],
            'ProductPrice' => ['required', 'integer'],
            'category_id' =>['required', 'integer'],
            'Quantity' => ['required', 'integer'],
            'ProductImage' => ['required','image','mimes:jpeg,png,jpg,gif'],
            ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=Product::latest()->paginate(7);
        
    //    $products=Product::all();
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";
        // die;
       return view('layouts.admin.product',compact('products'))->with('i',(request()->input('page',1) - 1)*10);

        // return view('admin.product',compact('product'));
        // return View::make('admin.product')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
      return view('layouts.admin.addProduct',['data'=>$data]);
    //  return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateAll($request);

        $image='';
        if($request->ProductImage){
            $image = time() . '.' . $request->ProductImage->extension();
            $request->ProductImage->move(public_path('uploads'),$image);
        }

        $data = new Product;
        $data->ProductName = $request->ProductName;
        $data->ProductPrice = $request->ProductPrice;
        $data->category_id = $request->category_id;
        $data->Quantity = $request->Quantity;
        $data->ProductImage = $image;
        $data->save();
       // print_r($request->all());
        return redirect()->route('product.index')->with('success','Product Data Inserted Successfully');
        // Product::create($request->all());
        // return view('admin.addProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::findorFail($id);
        if(is_null($product)){
            return redirect('layouts.admin.product');
        }else{
            $data = compact('product');
            return view('layouts.admin.updateProduct')->with($data);
        }
        // return view('admin.updateProduct',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ProductName' => ['required', 'string', 'max:255'],
            'ProductPrice' => ['required', 'integer'],
            'Quantity' => ['required', 'integer'],
        ]);
        $image='';
        if($request->ProductImage){
            $image = time() . '.' . $request->ProductImage->extension();
            $request->ProductImage->move(public_path('uploads'),$image);
        }
        $product=Product::findorFail($id);
        $product->ProductName = $request->ProductName;
        $product->ProductPrice = $request->ProductPrice;
        $product->Quantity = $request->Quantity;
        if($request->hasFile('ProductImage')){
            Storage::delete($product->ProductImage);
            $product->ProductImage = $image;
        }
        $product->save();
       // print_r($request->all());
    //    return redirect()->back();
       return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findorFail($id);
        if(!is_null($product)){
           $product->delete();
        }
        return redirect()->back();
        // echo "<pre>";
        // print_r($product);
        // $product->delete();
        // return redirect()->route('admin.product')->with('success','Product Data deleted Successfully');
    }
}
