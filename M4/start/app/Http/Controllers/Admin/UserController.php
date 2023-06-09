<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $age    = 18;
        $users  = ['Khuong','Phi','Hieu','Long'];
        $param =[
            'age' => $age,
            'users' => $users
        ];
        // return view('admin.users.index',compact(['users','age','name']));
        // return view('admin.users.index')->with('users',$users)
        // ->with('age',$age)->with('name',$name);
        return view('admin.users.index',$param);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $name   = 'NVA';
        return view('admin.users.create',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $username = 'admin123';
        return view('admin.users.edit',compact('id','username') );
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
