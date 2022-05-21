@extends('layouts.adminbase')

@section('title', 'Product List ')


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Product List</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Product List</li>
            </ol>
        </div>
    </div>
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.product.create')}}" class="btn btn-primary btn-md">Add Product</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Category Id</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->stock}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:40px">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-sm"onclick="return confirm('Deleting !! Are you Sure ?')">Delete</a></td>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"class="btn btn-success btn-sm">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
