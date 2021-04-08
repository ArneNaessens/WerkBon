<?php

namespace App\Http\Controllers;

use App\Helpers\ItemsHelper;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return ItemsHelper::index();
    }

    public function show($id)
    {
        return ItemsHelper::show($id);
    }

    public function create(Request $request)
    {
        return ItemsHelper::create($request->all());
    }

    public function update(Request $request, $id)
    {
        return ItemsHelper::update($request->all(), $id);
    }

    public function destroy($id)
    {
        return ItemsHelper::destroy($id);
    }
}
