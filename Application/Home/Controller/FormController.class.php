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
        //查询语言
        public function testSql(){
            //传统的,字符串作为查询条件
            //$Data = M('Data');
            //$res = $Data->where('id = 1')->select();
            //var_dump($res);
            //数组的方式查询数据库
//            $Data = M('Data');
//            $con['id'] = 1;
//            $con['data'] = 'php';
//            //定义查询逻辑默认是AND,这里写OR,表示或
//            $con['_logic'] = 'OR';
//            $res = $Data->where($con)->select();
//            var_dump($res);
            //使用对象的方式查询
//            $Data = M('Data');
//            $condition = new \stdClass();
//            $condition->id = 1;
//            $condition->data = 'thinkphp';
//            $res = $Data->where($condition)->select();
//            var_dump($res);
            //表达式查询
            /*eq 等于
             *neq不等于
             *gt大于
             *egt大于等于
             *lt小于
             *elt小于等于
             *like模糊查询
             *between区间查询
             *in in查询
             *exp   表达式查询
             */
//            $Data = M('Data');
//            $condition['data'] = array('like','think');
//            $res = $Data->where($condition)->select();
//            var_dump($res);
            //统计查询
            /*
             * count统计数量,根据字段名
             * max根据字段名,获取最大值
             * min根据字段名,获取最小值
             * avg根据字段名,获取平均值
             * sum根据字段名获取总分
             */
//            $Data = M('Data');
//            $res = $Data->count('id');
//            var_dump($res);
//            echo '<br/>';
//            $res = $Data->max('id');
//            var_dump($res);
//            echo '<br/>';
//            $res = $Data->min('id');
//            var_dump($res);
//            echo '<br/>';
//            $res = $Data->avg('id');
//            var_dump($res);
//            echo '<br/>';
//            $res = $Data->sum('id');
//            var_dump($res);
        }
}
