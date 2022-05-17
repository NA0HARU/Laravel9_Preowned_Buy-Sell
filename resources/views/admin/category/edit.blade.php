@extends('layouts.adminbase')

@section('title', 'Editing;'.$data->title)


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Editing; {{$data->title}}</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <form class="forms-sample" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
            </div>


            <div class="form-group">
                <label for="exampleInputName1">Keywords</label>
                <input type="text" class="form-control" name="keywords" placeholder="Keywords"value="{{$data->keywords}}">
            </div>


            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description"value="{{$data->description}}">
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
                <label>Status</label>
                <select class="form-control" name="status">
                    <option selected>{{$data->status}}</option>
                    <option>Enable</option>
                    <option>Disable</option>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
@endsection
