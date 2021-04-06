<?php

namespace App\Helpers;

use App\Models\Client;

class ClientsHelper
{

    public static function index()
    {
        return Client::all();
    }

    public static function show($id)
    {
        return Client::findOrFail($id);
    }

    public static function store($data)
    {
        $client = new Client([
            'name' => $data->name,
            'phone' => $data->phone,
            'vat' => $data->vat
        ]);

        $client->save();
        return $client;
    }

    public static function update($data)
    {
        $client = Client::find($data->id);

        $client->name = $data->name;
        $client->phone = $data->phone;
        $client->vat = $data->vat;

        $client->save();
        return $client;
    }

    public static function destroy($id)
    {
        $client = Client::findOrFail($id);

        $client->destroy();
        return 204;
    }
}
