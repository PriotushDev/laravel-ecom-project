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
                        <h4 class=".card-title">Sub Category Add</h4>
                    </div>
                    <div class="card-body">
                        <p>{{session('message')}}</p>
                        <form action="{{route('sub.category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="status" class="form-label">Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option value="" selected disabled>---select category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                <textarea name="name" class="form-control" placeholder="Category name"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Category Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select status---</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
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
