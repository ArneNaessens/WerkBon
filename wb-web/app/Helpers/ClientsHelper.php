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

    public static function create($data)
    {
        // $client = new Client([
        //     'name' => $data->name,
        //     'phone' => $data->phone,
        //     'vat' => $data->vat
        // ]);

        // $client->save();
        // return $client;
        return Client::firstOrCreate($data);
    }

    public static function update($data, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($data);
        $client->save();
        return $client;
    }

    public static function destroy($id)
    {

        $client = Client::findOrFail($id);
        $client->delete();
        return response(204);
    }
}
