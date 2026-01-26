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
                        <h4 class=".card-title">Category Add</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName"
                                       aria-describedby="emailHelp" placeholder="Enter Brand name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Brand Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select category status---</option>
                                    <option value="1">Active</option>
                                    <option value="2">InActive</option>
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
