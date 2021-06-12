<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = \App\User::all('id', 'name');

        return view('admin.stores.create', compact('users'));

    }

    public function store(Request $request)
    {
        $data =$request->all();

        $users = \App\User::find($data['users']);
        $store = $users->store()->create($data);

        return $store;
    }
}
