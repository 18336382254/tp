<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'hello thinkphp!';
    }
    public function hello($name = 'wangcan'){
        $this->assign('name',$name);
        $this->display();
    }
    public function readRes(){
        $Data = M('Data');//实例化Data数据模型
        $result = $Data->find(1);
        $this->assign('result',$result);
        $this->display();
    }
}