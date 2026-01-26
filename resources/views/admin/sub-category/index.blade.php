@extends('admin.master')

@section('title')
    Category Manage
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Sub Category Manage</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sub_catetories as $sub_category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$sub_category->category->name}}</td>
                                        <td>{{$sub_category->name}}</td>
                                        <td class="table-user">
                                            <img src="{{asset($sub_category->image)}}" alt="table-user"
                                                 height="50px" width="60px" />
                                        </td>
                                        <td>
                                            <a href="{{route('sub.category.edit', ['id' => $sub_category->id])}}"class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('sub.category.delete', ['id' => $sub_category->id])}}"class="btn btn-danger btn-sm">Delete</a>
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
