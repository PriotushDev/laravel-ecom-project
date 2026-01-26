@extends('admin.master')
@section('title')

    Brand Add

@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Brand Manage</h4>
                    </div>
                    <div class="card-body">
                        <p>{{session('message')}}</p>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" alt="" height="50px" width="60px">
                                        </td>
                                        <td>
                                            <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
        <!-- end row-->
    </div> <!-- container -->
@endsection
