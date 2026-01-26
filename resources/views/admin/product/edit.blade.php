@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class=".card-title">Update Product Form</h4>
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
                                        <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Sub Category Name</label>
                                <select name="sub_category_id" class="form-control" id="subCategory">
                                    <option value="" selected disabled>---select Sub category---</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}" @selected($sub_category->id == $product->sub_category_id)>{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Brand Name</label>
                                <select name="brand_id" class="form-control">
                                    <option value="" selected disabled>---select Brand Name---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Unit Name</label>
                                <select name="unit_id" class="form-control">
                                    <option value="" selected disabled>---select Unit---</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input name="name" value="{{$product->name}}" class="form-control" placeholder="Category name" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputCode" class="form-label">Code</label>
                                <input name="code" value="{{$product->code}}" class="form-control" placeholder="product code" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputStockAmount" class="form-label">Stock Amount</label>
                                <input name="stock_amount" value="{{$product->stock_amount}}" class="form-control" placeholder="stock amount" />
                            </div>

                            <div class="mb-3">
                                    <label for="exampleInputStockAmount" class="form-label">Product Price</label>
                                    <div class="input-group">
                                        <input name="regurlar_price" value="{{$product->regurlar_price}}" type="number" class="form-control" placeholder="Enter regular  price" />
                                        <input name="selling_price" value="{{$product->selling_price}}" type="number" class="form-control" placeholder="Enter selling  price" />
                                    </div>
                            </div>

                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" placeholder="Short Description">{{$product->short_description}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="long_description" class="form-label">Long Description</label>
                                <textarea name="long_description" id="summernote"  style="height: 300px;" class="form-control" placeholder="Long Description">{{$product->long_description}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_title" class="form-label">Meta Titile</label>
                                <textarea name="meta_title" class="form-control" placeholder="meta title">{{$product->meta_title}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" placeholder="meta description" >{{$product->meta_description}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                                <img src="{{asset($product->image)}}" alt="" height="100" />
                            </div>

                            <div class="mb-3">
                                <label for="other_image" class="form-label">Other Image</label>
                                <input type="file" class="form-control" name="other_image[]" multiple accept="image/*">
                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="" height="100" />
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Feature Status</label>
                                <label for=""><input type="radio" name="featured_status" {{ $product->featured_status == 1 ? 'checked' : '' }} value="1" />Featured</label>
                                <label for=""><input type="radio" name="featured_status" {{ $product->featured_status == 0 ? 'checked' : '' }} value="0" />Not Featured</label>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>---select status---</option>
                                    <option value="1" @selected($product->status == 1)>Active</option>
                                    <option value="2" @selected($product->status == 2)>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Product Info</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->
    </div> <!-- container -->
@endsection
