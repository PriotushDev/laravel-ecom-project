@extends('admin.master')

@section('title')
    Category Edit
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Category Add</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}" id="exampleInputName"
                                       aria-describedby="emailHelp" placeholder="Enter category name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Category Description">{{$category->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($category->image)}}" style="width: 50px; height: 50px;" class="mt-3" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select category status---</option>
                                    <option value="1" @if($category->status == 1) selected @endif >Active</option>
                                    <option value="2" @if($category->status == 2) selected @endif>InActive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
