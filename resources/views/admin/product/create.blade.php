@extends('layouts.adminbase')

@section('title', 'Add Product')


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Product</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">Add Product</h4>
        <form class="forms-sample" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>


            <div class="form-group">
                <label for="exampleInputName1">Keywords</label>
                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
            </div>


            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div>


            <div class="form-group">
                <label for="exampleInputFile1">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="file-input" name="image" >
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label>Category Id</label>

                <select class="form-control select2" name="category_id" style="">
                    <option value="0" selected="selected">Main Category</option>
                    @foreach($data as $rs)
                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Detail</label>
                <input type="text" class="form-control" name="detail" placeholder="Detail">
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                <input type="float" class="form-control" name="price" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Stock</label>
                <input type="integer" class="form-control" name="stock" placeholder="Stock">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option>Enable</option>
                    <option>Disable</option>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
