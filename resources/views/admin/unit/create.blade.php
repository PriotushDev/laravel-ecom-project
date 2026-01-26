@extends('admin.master')
@section('title')
    Add Unit
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <p>{{session('message')}}</p>
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Add Unit Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('unit.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName"
                                       aria-describedby="emailHelp" placeholder="Enter Unit name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputCode" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control" id="exampleInputCode"
                                       aria-describedby="emailHelp" placeholder="Enter Unit Code">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Brand Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select category status---</option>
                                    <option value="1">Active</option>
                                    <option value="2">InActive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Unit</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
