@extends('admin.master')

@section('title')
    Sub Category Add
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Edit Sub Category</h4>
                    </div>
                    <div class="card-body">
                        <p>{{session('message')}}</p>
                        <form action="{{route('sub.category.update', $sub_category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="status" class="form-label">Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option value="" selected disabled>---select category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($sub_category->category_id == $category->id) >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$sub_category->name}}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Category Description">{{$sub_category->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($sub_category->image)}}" alt="" height='60'>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select status---</option>
                                    <option value="1" @if($category->status == 1) selected @endif >Active</option>
                                    <option value="2" @if($category->status == 2) selected @endif >Inactive</option>
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
