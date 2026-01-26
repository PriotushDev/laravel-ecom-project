@extends('admin.master')

@section('title')
    Product detail Information
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Product Basic Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <tr>
                                    <th>Product Id</th>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Code</th>
                                    <td>{{$product->code}}</td>
                                </tr>
                                <tr>
                                    <th>Product Category</th>
                                    <td>{{$product->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Sub Category</th>
                                    <td>{{$product->subCategory->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Brand</th>
                                    <td>{{$product->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Unit</th>
                                    <td>{{$product->unit->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Short Description</th>
                                    <td>{{$product->short_description}}</td>
                                </tr>
                                <tr>
                                    <th>Product Long Description</th>
                                    <td>{!! $product->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <td><img src="{{asset($product->image)}}" alt="" height="100"></td>
                                </tr>
                                <tr>
                                    <th>Product Other Image</th>
                                    <td>
                                        @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" alt="" height="100">
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Price</th>
                                    <td><b>Regular Price: </b> {{$product->regurlar_price}},<b> Selling Price: </b> {{$product->selling_price}},</td>
                                </tr>
                                <tr>
                                    <th>Product Stock Amount</th>
                                    <td>{{$product->stock_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Product Meta Title</th>
                                    <td>{{$product->meta_title}}</td>
                                </tr>
                                <tr>
                                    <th>Product Meta Description</th>
                                    <td>{{$product->meta_description}}</td>
                                </tr>
                                <tr>
                                    <th>Product Total View</th>
                                    <td>{{$product->hit_count}}</td>
                                </tr>
                                <tr>
                                    <th>Product Total Sale</th>
                                    <td>{{$product->sales_count}}</td>
                                </tr>

                                <tr>
                                    <th>Product Featured Status</th>
                                    <td>{{$product->featured_status}}</td>
                                </tr>
                                <tr>
                                    <th>Product Publication Status</th>
                                    <td>{{$product->status}}</td>
                                </tr>

                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
        <!-- end row-->
    </div> <!-- container -->
@endsection
