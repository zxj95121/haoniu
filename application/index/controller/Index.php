<?php
namespace app\index\controller;

use app\index\model\User;

class Index extends Base
{
    public function index()
    {
    	echo $this->data;
    	exit;
    }

    public function lists()
    {
        $user = User::getUser();
        var_dump($user);
        return view('list');
    }
}
