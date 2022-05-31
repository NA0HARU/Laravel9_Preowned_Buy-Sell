@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery ')


@section('content')

    <div class="card">
        <div class="card-body">
            <h2>{{$product->title}}</h2>

            <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile1">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="file-input" name="image" >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </div>


            </form>
        </div>



    </div>




    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Update</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:40px">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.image.edit',['id'=>$rs->id])}}"class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('admin.image.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-sm"onclick="return confirm('Deleting !! Are you Sure ?')">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->


