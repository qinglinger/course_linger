<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class LogController extends Controller
{
    public function registerHandle(Request $request){
        $userName = $request->get('userName') ;
        $password = $request->get('password');
        $gender = $request->get('gender');
        $identity = $request->get('identity');

        echo 1;

        $user = new User();
        $user->userName = $userName;
        $user->password = $password;
        $user->gender = $gender;
        $user->identity = $identity;
        $user->save();


    }
}
