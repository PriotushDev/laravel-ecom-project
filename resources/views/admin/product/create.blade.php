@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Add Product Form</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{session('message')}}</p>
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="status" class="form-label">Category Name</label>
                                <select name="category_id" class="form-control" onchange="getSubCategory(this.value)">
                                    <option value="" selected disabled>---select category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Sub Category Name</label>
                                <select name="sub_category_id" class="form-control" id="subCategory">
                                    <option value="" selected disabled>---select Sub category---</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Brand Name</label>
                                <select name="brand_id" class="form-control">
                                    <option value="" selected disabled>---select Brand Name---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Unit Name</label>
                                <select name="unit_id" class="form-control">
                                    <option value="" selected disabled>---select Unit---</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input name="name" class="form-control" placeholder="Category name" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputCode" class="form-label">Code</label>
                                <input name="code" class="form-control" placeholder="product code" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputStockAmount" class="form-label">Stock Amount</label>
                                <input name="stock_amount" class="form-control" placeholder="stock amount" />
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <label for="exampleInputStockAmount" class="form-label">Product Price</label>
                                    <input name="regurlar_price" type="number" class="form-control" placeholder="Enter regular  price" />
                                    <input name="selling_price" type="number" class="form-control" placeholder="Enter selling  price" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" placeholder="Short Description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="long_description" class="form-label">Long Description</label>
                                <textarea name="long_description" id="summernote"  style="height: 300px;" class="form-control" placeholder="Long Description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_title" class="form-label">Meta Titile</label>
                                <textarea name="meta_title" class="form-control" placeholder="meta title"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" placeholder="meta description" ></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="other_image" class="form-label">Other Image</label>
                                <input type="file" class="form-control" name="other_image[]" multiple accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Feature Status</label>
                                <label for=""><input type="radio" name="featured_status" value="1" />Featured</label>
                                <label for=""><input type="radio" name="featured_status" value="0" />Not Featured</label>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select status---</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Product</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
