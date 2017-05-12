<?php

namespace App\Http\Controllers;

use App\User as UserModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackstageController extends Controller
{
    //
    public function showUser(Request $request){
//        $query = UserModel::select("*")->paginate(5);
        $query = DB::table('user')->get();

        $data = [
            "posts" => $query
        ];

        return view('backstage/backstage', $data);
    }

    public function showCourse(Request $request){
        $query = DB::table('course')->get();

        $data = [
            "posts" => $query
        ];

        return view('backstage', $data);
    }
}
