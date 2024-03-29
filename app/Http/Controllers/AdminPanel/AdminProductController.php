<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function redirect;
use function view;

class AdminProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('admin.product.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Product::all();
        return view('admin.product.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Product();
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->category_id = 0;//$request->category_id;
        $data->detail =$request->detail;
        $data->price =$request->price;
        $data->stock =$request->stock;
        $data->user_id = 0;//$request->user_id;
        $data->status =$request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        //
        $data=Product::find($id);
        return view('admin.product.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        //
        $data=Product::find($id);
        $datalist=Category::all();

        return view('admin.product.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data=Product::find($id);
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->category_id =$request->category_id;
        $data->detail =$request->detail;
        $data->price =$request->price;
        $data->stock =$request->stock;
        $data->user_id = 0;//$request->user_id;
        $data->status =$request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $data=Product::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/product');
    }
}
