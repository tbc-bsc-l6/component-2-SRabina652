<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function validateAll(Request $request){
        $request->validate([
            'ProductName' => ['required', 'string', 'max:255'],
            'ProductPrice' => ['required', 'integer'],
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
       return view('admin.product',compact('products'))->with('i',(request()->input('page',1) - 1)*10);

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
        return view('admin.addProduct');
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
        $data->Quantity = $request->Quantity;
        $data->ProductImage = $image;
        $data->save();
       // print_r($request->all());
        return redirect()->route('admin.product')->with('success','Product Data Inserted Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
