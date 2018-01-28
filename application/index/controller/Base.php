<?php
namespace app\index\controller;

use \think\Controller;
use \Interval\Basic;
use \think\Request;

class Base extends Controller
{
	protected $data;
	public function __construct(Request $request)
	{
		$input = $request->param();
		if (isset($input['interval'])) {
			$interval = explode('.', $input['interval']);
			Basic::run($interval[0], $interval[1]);
		}
		$this->data = 1;
	}
}
