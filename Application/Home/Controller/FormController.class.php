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
        //连贯操作
        public function coherentSql(){
//            $Data = M('Data');
//            $con['id'] = array('gt',1);
//            $res = $Data->where($con)->order('data')->limit('5')->select();
//            var_dump($res);
            //$Data = M('Data');
//            $res = $Data->where('id=1')->field('id,data')->find();
//            var_dump($res);
           // $Data->where('id=1')->delete();
            $Data = M('Form');
            //跨表操作
            //$res = $Data->table('think_form')->where('id>1')->select();
            //var_dump($res);
            //跨库操作
            //$res = $Data->table('yxt.yxt_grade')->where('id=2')->select();
            //var_dump($res);
            //这里有问题
            //$res = $Data->table(array('think_data'=>'data','think_form'=>'content'))->where('id>1')->select();
           // var_dump($res);
            //field用法
            //$res = $Data->field('id',true)->select();
            //var_dump($res);
            //desc和acs
            //desc是降序acs是升序
            //page分页
            //$res = $Data->page(2)->limit(2)->select();
            //错的
//            $res= $Data->field('id')->group('create_time')->having('count(id)>2')->select();
//            var_dump($res);
        }
        //变量
        public function variable(){
            //I方法获取变量
            echo I('get.id'); // 相当于 $_GET['id']
            echo I('get.name'); // 相当于 $_GET['name']

            //带默认值的获取变量
            echo I('get.id',0); // 如果不存在$_GET['id'] 则返回0
            echo I('get.name',''); // 如果不存在$_GET['name'] 则返回空字符串

            // 采用htmlspecialchars方法对$_GET['name'] 进行过滤，如果不存在则返回空字符串
            echo I('get.name','','htmlspecialchars');

            // 获取整个$_GET 数组
            I('get.');

            //由于param类型是I函数默认获取的变量类型，因此事实上param变量类型的写法可以简化为：
            I('id'); // 等同于 I('param.id')
            I('name'); // 等同于 I('param.name')
            //path类型变量可以用于获取PATHINFO方式的URL参数
            echo I('path.1'); // 输出2013
            echo I('path.2'); // 输出06
            echo I('path.3'); // 输出01

        }
}
