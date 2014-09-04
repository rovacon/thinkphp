<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $name = array('a'=>'1','b'=>'2');';
        $this->assign('name',$name);
			$this->display();
    }
}