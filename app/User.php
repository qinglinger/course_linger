<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $timestamps = false;
    protected $table = "user";
    protected $primaryKey = "id";
    protected $casts = ["id" => "INT"];

    protected $username = 'userName';
    protected $userID = 'userID';
    protected $password = 'password';
    protected $gender = 'gender';
    protected $identity = 'indentity';

//    protected $fillable = ['userID', 'userName', 'password', 'gender', 'identity'];
}
