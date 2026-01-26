<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public static $unit;


    public static function saveBasicInfo($unit, $request)
    {
        $unit->name = $request->name;
        $unit->code = $request->code;
        $unit->description = $request->description;
        $unit->status = $request->status;
        $unit->save();
    }

    public static function newUnit($request)
    {
        self::$unit = new Unit();
        self::saveBasicInfo(self::$unit, $request);
    }

    public static function updateUnit($request, $id)
    {
        self::$unit = Unit::find($id);

        self::saveBasicInfo(self::$unit, $request);
    }

    public static function deleteUnit($id)
    {
        self::$unit = Unit::find($id);
        self::$brand->delete();
    }

}
