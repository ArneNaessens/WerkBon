<?php

namespace App\Http\Controllers;

use App\Helpers\AddressesHelper;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return AddressesHelper::index();
    }

    public function show($id)
    {
        return AddressesHelper::show($id);
    }

    public function create(Request $request)
    {
        return AddressesHelper::create($request->all());
    }

    public function update(Request $request, $id)
    {
        return AddressesHelper::update($request->all(), $id);
    }

    public function destroy($id)
    {
        return AddressesHelper::destroy($id);
    }
}
