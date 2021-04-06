<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Helpers\ClientsHelper;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return ClientsHelper::index();
    }

    public function show($id)
    {
        return ClientsHelper::show($id);
    }

    public function destroy($id)
    {
        return ClientsHelper::destroy($id);
    }
}
