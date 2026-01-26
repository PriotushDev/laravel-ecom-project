@extends('admin.master')
@section('title')
    Manage Brand
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <p>{{session('message')}}</p>
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Edit Brand</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('brand.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$brand->id}}" />
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName"
                                       aria-describedby="emailHelp" value="{{$brand->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control">{{$brand->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($brand->image)}}" alt="" height="50px" width="60px">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select category status---</option>
                                    <option value="1" @selected($brand->status == 1) >Active</option>
                                    <option value="2" @selected($brand->status == 2) >InActive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
