@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">All Product Info</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Stock Amount</th>
                                    <th>Selling Price</th>
                                    <th>Total Sale</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->stock_amount}}</td>
                                            <td>{{$product->selling_price}}</td>
                                            <td>{{$product->sale_count}}</td>
                                            <td>
                                                <img src="{{asset($product->image)}}" alt="" height="50"/>
                                            </td>
                                            <td>
                                                <a href="{{route('product.delail', ['id' => $product->id])}}" class="btn btn-success btn-sm"> Detail</a>
                                                <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm"> Edit</a>
                                                <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-success btn-sm"> Delete</a>

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
