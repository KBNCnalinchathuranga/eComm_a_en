<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

   function login(Request $req)
{
    $user=User:: where(['email' => $req->email])->first();

    // $userPw=$user->pwd;

    if(!$user || !Hash::check($req->password,$user->password))
{

        return "User Name Password is not matched";
}
    else{
        $req->session()->put('user',$user);

        return redirect('/');
    }

   }


}
