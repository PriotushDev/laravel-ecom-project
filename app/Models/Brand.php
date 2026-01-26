<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $brand, $image, $imageName, $extension, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/brand-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        return self::$imageUrl;
    }

    public static function saveBasicInfo($brand, $request, $imageUrl)
    {
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->image = $imageUrl;
        $brand->status = $request->status;
        $brand->save();
    }

    public static function newBrand($request)
    {


        self::$brand = new Brand();
        self::saveBasicInfo(self::$brand, $request, self::getImageUrl($request));
    }

    public static function updateBrand($request)
    {
        self::$brand = Brand::find($request->id);
        if($request->file('image'))
        {
            if(file_exists(self::$brand->iamge))
            {
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);

        }
        else
        {
            self::$imageUrl = self::$brand->image;
        }

        self::saveBasicInfo(self::$brand, $request, self::$imageUrl);
    }

    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if(file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }



}
