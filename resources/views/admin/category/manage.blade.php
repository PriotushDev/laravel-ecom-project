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
                        <h4 class=".card-title">Category Manage</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{ session('message') }}</p>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Home Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td class="table-user">
                                        <img src="{{asset($category->image)}}" alt="table-user"
                                             class="me-2 rounded-circle" />
                                    </td>
                                    <td> {{ $category->home_status == 1 ? 'Active' : 'Not Active' }} </td>
                                    <td>
                                        <a href="{{route('category.updateHomeStatus', ['id' => $category->id])}}" class="text-reset fs-16 px-1" title="Edit">Update Status</a>
                                        <a href="{{route('category.edit', ['id' => $category->id])}}" class="text-reset fs-16 px-1" title="Edit"> <i
                                                class="ri-edit-2-fill"></i></a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('CategoryDelete').submit();" class="text-reset fs-16 px-1" title="Delete"> <i
                                                class="ri-delete-bin-2-line"></i></a>

                                        <form action="{{route('category.delete', ['id' => $category->id])}}" method="POST" id="CategoryDelete">
                                            @csrf
                                        </form>
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
