<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public static $subCategory, $image, $imageName, $extension, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/sub-categroy-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        return self::$imageUrl;
    }

    public static function saveBasicInfo($subCategory, $request, $imageUrl)
    {
        $subCategory->category_id   = $request->category_id;
        $subCategory->name          = $request->name;
        $subCategory->description   = $request->description;
        $subCategory->image         = $imageUrl;
        $subCategory->status        = $request->status;
        $subCategory->save();
    }

    public static function newSubCatetory($request)
    {
        self::$subCategory = new SubCategory();
        self::saveBasicInfo(self::$subCategory, $request, self::getImageUrl($request));
    }

    public static function updateSubCateory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$subCategory->image))
            {
                unlink(self::$subCategory->image);
            }
            self::$imageUrl = self::getImageUrl($request);

        }
        else
        {
            self::$imageUrl = self::$subCategory->image;
        }

        self::saveBasicInfo(self::$subCategory, $request, self::$imageUrl);
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if(file_exists(self::$subCategory->image))
        {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
