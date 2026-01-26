<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function BaconQrCode\Renderer\newImage;

class OtherImage extends Model
{
    public static $otherImage, $image, $otherImages, $imageName, $extension, $directory, $imageUrl;

    public static function newOtherImage($images, $id)
    {
        foreach ($images as $image)
        {
            self::$extension = $image->getClientOriginalExtension();
            self::$imageName = rand(100000, 600000).'.'.self::$extension;
            self::$directory = 'upload/product-other-images/';
            $image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;

            self::$otherImage               = new OtherImage();
            self::$otherImage->product_id   = $id;
            self::$otherImage->image        = self::$imageUrl;
            self::$otherImage->save();
        }
    }

    public static function updateOtherImage($images, $id)
    {
        self::$otherImages = OtherImage::where('product_id', $id)->get();

        foreach (self::$otherImages as $otherImage)
        {
            //image delete from folder
            if(file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            //image delete from database
            $otherImage->delete();
        }

        self::newOtherImage($images, $id); // this is above code for upload image.
    }



}
