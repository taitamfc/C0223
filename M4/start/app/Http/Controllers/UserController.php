<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //$_REQUEST
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        // $items = User::all();
        $items = [];
        return view('users.index', compact(['items']));
    }
    public function store(Request $request){
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        die();


        // $username = $_REQUEST['username'];
        // $password = $_REQUEST['password'];
        
        $username = $request->username;
        $password = $request->password;


    }
}
