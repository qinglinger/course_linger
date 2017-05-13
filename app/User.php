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

    protected $userName = 'userName';
    protected $userID = 'userID';
    protected $password = 'password';
    protected $gender = 'gender';
    protected $identity = 'indentity';

    protected $fillable = ['userName', 'password', 'gender', 'identity'];
}
