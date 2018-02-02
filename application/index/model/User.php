<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $table = 'user';

    public static function getUser()
    {
        $userList = User::all();
        return $userList;
    }
}