<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        Auth::loginUsingId(1);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->authorize('viewAny',User::class);//false => 403, true => 200
        // dd( __METHOD__ );
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
        $roles = [
            'username' => 'required|max:255',
            'password' => 'required',
            'email' => 'required',
        ];

        $messages = [
            'email.required' => 'Vui long nhap email',
            'password.required' => 'Vui long nhap password',
            'username.required' => 'Vui long nhap username',
            'username.unique' => 'Ten dang nhap da ton tai',
            'username.max' => 'Ky tu ko qua 255',
        ];

        $validator = Validator::make($request->all(),$roles,$messages);
        if ($validator->fails()) {
            return redirect()->route('users.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        try {
            $user = User::create($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('users.create')->with('error','Luu khong thanh cong');
        }
        
    }

    public function store1(Request $request)
    {
        $roles = [
            'username' => 'required|max:255',
            'password' => 'required',
            'email' => 'required',
        ];

        $messages = [
            'email.required' => 'Vui long nhap email',
            'password.required' => 'Vui long nhap password',
            'username.required' => 'Vui long nhap username',
            'username.unique' => 'Ten dang nhap da ton tai',
            'username.max' => 'Ky tu ko qua 255',
        ];
        $request->validate($roles,$messages);
        dd($request->all());
    }

    public function store2(StoreUserRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $user = User::find($id);
        // try {
        //     if(!$user){
        //         throw new ModelNotFoundException("Khong tim thay user");
        //     }
        // } catch (\Exception $e) {
        //     Log::error($e->getMessage());
        //     return redirect()->route('users.index')->with('error','Luu khong thanh cong');
        // }

        $user = User::findOrFail($id);
        
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
