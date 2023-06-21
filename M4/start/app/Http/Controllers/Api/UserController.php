<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::all();
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        echo '<pre>';
        print_r( $request->all() );
        echo '</pre>';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = User::find($id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
