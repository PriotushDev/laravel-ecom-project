@extends('admin.master')
@section('title')
    Manage Unit
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">All Unit Info</h4>
                    </div>
                    <div class="card-body">
                        <p>{{session('message')}}</p>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

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
