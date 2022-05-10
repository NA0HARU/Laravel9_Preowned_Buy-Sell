@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Category</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">Add Category</h4>
        <form class="forms-sample" action="{{route('admin.category.store')}}" method="post">
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
