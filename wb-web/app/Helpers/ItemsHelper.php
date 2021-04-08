<?php

namespace App\Helpers;

use App\Models\Item;

class ItemsHelper
{

    public static function index()
    {
        return Item::all();
    }

    public static function show($id)
    {
        return Item::findOrFail($id);
    }

    public static function create($data)
    {
        return Item::firstOrCreate($data);
    }

    public static function update($data, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($data);
        $item->save();
        return $item;
    }

    public static function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response(204);
    }
}
