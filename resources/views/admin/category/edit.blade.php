@extends('layouts.adminbase')

@section('title', 'Editing;'.$data->title)


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Editing; {{$data->title}}</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <form class="forms-sample" action="/admin/category/update/{{$data->id}}" method="post">
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
                <label>Choose Image</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
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
