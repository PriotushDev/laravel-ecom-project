<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function getImageUrl($request)
    {
        $slug = Str::slug($request->name);
        $image = $request->file('image');
        $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
        $directory = 'category-images/';
        $image->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $this->getImageUrl($request);
        $category->status = $request->status;

        $category->save();

        return redirect()->back()->with('success', 'Category Create Successfully');
    }

    public function manage()
    {
        $categories = Category::latest()->get();
        return view('admin.category.manage', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description  = $request->description;
        if ($request->file('image'))
        {
            if (file_exists($category->image))
            {
                unlink($category->image);
            }
            $imageUrl = $this->getImageUrl($request);
        }
        else
        {
            $imageUrl = $category->image;
        }
        $category->image = $imageUrl;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('category.manage')->with('success', 'Category update successfully');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->back()->with('success', 'Category Delete Successfully');
    }
}
