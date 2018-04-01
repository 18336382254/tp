<?php
// +----------------------------------------------------------------------
// |  [ 123 ]
// +----------------------------------------------------------------------
// | Author: wangcan  
// +----------------------------------------------------------------------
// | Date: 2018/3/30 0030 Time: 16:22
// +----------------------------------------------------------------------

namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
    public function insert(){
//        $Form = D('Form');
//        if($Form->create()){
//            $result = $Form->add();
//            if($result){
//                $this->success('数据添加成功！');
//            }
//            else{
//                $this->error('数据添加错误！');
//            }
//        }
//        else{
//            $this->error($Form->getError());
//        }
        $Form   =   D('Form');
//        $data['title']  =   'ThinkPHP';
//        $data['content']    =   '表单内容';
//        $Form->add($data);
        $Form->title = '对象标题';
        $Form->content = '对象内容';
        $Form->add();
    }
    public function read($id=1){
        $Form = M('Form');
        $result = $Form->find($id);
        $resultField = $Form->where('id=1')->getField('title');
        $this->assign('resultField',$resultField);
        if($result){
            $this->assign('result',$result);
        }
        else{
            $this->error('数据错误');
        }
        $this->display();
    }
    public function edit($id=1){
        $Form = M('Form');
        $result = $Form->find($id);
        if($result){
            $this->assign('result',$result);
        }
        else{
            $this->error('数据错误');
        }
        $this->display();
    }
    public function update(){
        $Form = D('Form');
        if($Form->create()){
            $result = $Form->save();
            if($result){
                $this->success('修改成功');
            }
            else{
                $this->error('数据错误');
            }
        }
        else{
            $this->error($Form->getError());
        }
    }
}
