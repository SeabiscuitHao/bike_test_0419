<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller {
	public function _initialize() {

		if (!session('username') || !session('id')) {
			$this->error('请先登录','login/login');
		}
		
	}
}