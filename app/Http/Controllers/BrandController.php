<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    public $brands, $brand;
    public function index()
    {
        $this->brands = Brand::all();
        return view('admin.brand.index', ['brands' => $this->brands]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        Brand::newBrand($request);
        return back()->with('message', 'Brand info create successfully.');
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $this->brand]);
    }

    public function updateBrand(Request $request)
    {
        Brand::updateBrand($request);
        return redirect('/brand')->with('message', 'Brand info Update Successfully');
    }

    public function deleteBrand($id)
    {
        Brand::deleteBrand($id);
        return back()->with('message', 'Brand delete successfully.');
    }


}
