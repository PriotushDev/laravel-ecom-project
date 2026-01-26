<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\OtherImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
//        return Product::latest()->get(['id','name', 'image', 'selling_price']);
        return view('admin.product.index', ['products' => Product::latest()->get(['id','name', 'image','stock_amount', 'sale_count', 'selling_price'])]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
        ]);
    }

    public function getSubCategory()
    {
        $categoryId = $_GET['id'];
        $subCategories =SubCategory::where('category_id',$categoryId)->get();
        return response()->json($subCategories);
    }


    public  function store(Request $request)
    {
//        return $request; debaging purpose
//        $request->validate($request, [
//            'category_id' => 'required',
//            'sub_category_id' => 'required',
//            'brand_id' => 'required',
//            'unit_id' => 'required',
//        ]);

        $productId = Product::newProduct($request);
        otherImage::newOtherImage($request->file('other_image'), $productId);
        return back()->with('message','product add succssfully');
    }
}
