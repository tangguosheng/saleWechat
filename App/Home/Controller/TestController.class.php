<?php
/**
 * 项目测试类
 *
 * User: Guus
 * Date: 2018/9/4
 * Time: 20:31
 */
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{
	public function index()
	{
		$this->display();
	}
}