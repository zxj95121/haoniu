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

		$this->extend($input);//调用扩展内容这块

		$this->data = 1;
	}

	private function extend($post)
	{
		/*定时器这块的类，url请求参数interval*/
		if (isset($post['i'])) {
			Basic::run($post['i']);
		}
		
		/*钩子这块的类，主要是用于加载其他页面内容或者调到其他页面*/
		if (isset($post['h'])) {
			$address = HOOK.str_replace('.', '/', $post['h']).'.php';
			include ($address);
			exit;
		}
	}
}
