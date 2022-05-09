@extends('layouts.adminbase')

@section('title', 'Showing;'.$data->title)


@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Showing; {{$data->title}}</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">{{$data->title}}</li>
            </ol>
        </div>
    </div>

    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Detail Data</h6>
        <table class="table">
            <tr>
                <th scope="col" >Id</th>
                <th scope="col">{{$data->id}}</th>
            </tr>
            <tr>
                <th scope="col" >Title</th>
                <th scope="col">{{$data->title}}</th>
            </tr>
            <tr>
                <th scope="col" >Keywords</th>
                <th scope="col">{{$data->keywords}}</th>
            </tr>
            <tr>
                <th scope="col" >Description</th>
                <th scope="col">{{$data->description}}</th>
            </tr>
            <tr>
                <th scope="col" >Image</th>
                <th scope="col">{{$data->image}}</th>
            </tr>
            <tr>
                <th scope="col" >Status</th>
                <th scope="col">{{$data->status}}</th>
            </tr>
            <tr>
                <th scope="col" >Created at</th>
                <th scope="col">{{$data->created_at}}</th>
            </tr>
            <tr>
                <th scope="col" >Update date</th>
                <th scope="col">{{$data->updated_at}}</th>
            </tr>
            <tr>
                <td><a href="/admin/category/edit/{{$data->id}}"class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
            <tr>
                <td><a href="/admin/category/destroy/{{$data->id}}"class="btn btn-danger btn-sm" onclick="return confirm('Deleting !! Are you Sure ?')">Delete</a></td>
            </tr>


        </table>
    </div>
@endsection
