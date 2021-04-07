<?php

namespace App\Helpers;

use App\Models\Address;

class AddressesHelper
{

    public static function index()
    {
        return Address::all();
    }

    public static function show($id)
    {
        return Address::findOrFail($id);
    }

    public static function create($data)
    {
        return Address::firstOrCreate($data);
    }

    public static function update($data, $id)
    {
        $address = Address::findOrFail($id);
        $address->update($data);
        $address->save();
        return $address;
    }

    public static function destroy($id)
    {

        $address = Address::findOrFail($id);
        $address->delete();
        return response(204);
    }
}
