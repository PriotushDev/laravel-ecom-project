<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static $product, $image, $imageName, $extension, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'upload/product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        return self::$imageUrl;
    }

    public static function saveBasicInfo($product, $request, $imageUrl)
    {
        $product->category_id       = $request->category_id;
        $product->sub_category_id   = $request->sub_category_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->name              = $request->name;
        $product->code              = $request->code;
        $product->stock_amount      = $request->stock_amount;
        $product->regurlar_price    = $request->regurlar_price;
        $product->selling_price     = $request->selling_price;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;
        $product->image             = $imageUrl;
        $product->featured_status   = $request->featured_status;
        $product->status            = $request->status;
        $product->save();

        return $product->id;

    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        return self::saveBasicInfo(self::$product, $request, self::getImageUrl($request));
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);

        }
        else
        {
            self::$imageUrl = self::$product->image;
        }

        self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if(file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
