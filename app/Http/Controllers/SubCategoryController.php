<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public $categories, $subCategroies;

    public function index()
    {
        $this->subCategroies = SubCategory::all();
        return view('admin.sub-category.index', ['sub_catetories' => $this->subCategroies]);
    }

    public function create()
    {
        $this->categories = Category::all();
        return view('admin.sub-category.create', ['categories' => $this->categories]);
    }

    public function store(Request $request)
    {
        SubCategory::newSubCatetory($request);
        return back()->with('message', 'sub category info create successfully.');
    }

    public function edit($id)
    {
        return view('admin.sub-category.edit', [
            'sub_category' => SubCategory::find($id),
            'categories'=> Category::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCateory($request, $id);
        return redirect('/sub-category')->with('message', 'sub category info update successfully.');
    }



}
