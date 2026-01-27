<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function Illuminate\Database\Query\latest;

class WebsiteController extends Controller
{
    public function index()
    {
        $product = Product::where('status', 1)->latest()->get();
        $featureProducts = Product::where(['status' => 1, 'featured_status' => 1 ])->latest()->take(3)->get();
        $homeCategories = Category::where(['status' => 1, 'home_status' => 1 ])->take(3)->get();


        return view('website.home.index', [
                'products' => $product,
                'feature_products' => $featureProducts,
                'home_categories'   => $homeCategories,
            ]);
    }

    public function category($id)
    {
        $products = Product::where(['status' => 1, 'category_id' => $id])->latest()->get();
        return view('website.category.index', ['products' => $products]);
    }

    public function product($id)
    {
        return view('website.product.index', ['product' => Product::find($id)]);
    }

    public function viewCart()
    {
        return view('website.cart.view-cart');
    }
}
