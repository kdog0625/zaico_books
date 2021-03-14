<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::id())->paginate(30);
        $items = Product::where('status', 0)->get();
        $user_id = Product::where('user_id','<>', Auth::id())->get();
        return view('products.index')->with(['items' => $items, 'products' => $products, 'user_id' => $user_id]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
        if ($file = $request->zaico_image) {
            //getClientOriginalNameでアップロードしたファイルの元の名前を知る事ができる。
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('images/Product/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $this->zaico_carm($product, $request, $fileName);
        $product->user_id = $request->user()->id;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $params=$request->all();
        Storage::delete( $product->zaico_image);
        if ($file = $request->zaico_image) {
            $fileName = time() . $file->getClientOriginalName();
            $params['zaico_image'] = $fileName;
            $target_path = public_path('images/Product/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $this->zaico_carm($product, $request, $fileName);
        $product->user_id = $request->user()->id;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function zaico_carm($product, $request, $fileName){
        $product->zaico_number = $request->zaico_number;
        $product->zaico_name = $request->zaico_name;
        $product->zaico_image = $fileName;
        $product->zaico_count = $request->zaico_count;
        $product->content = $request->content;
        $product->category = $request->category;
        $product->zaico_storage = $request->zaico_storage;
    }
}
