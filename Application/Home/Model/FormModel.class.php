<?php
// +----------------------------------------------------------------------
// |  [ 123 ]
// +----------------------------------------------------------------------
// | Author: wangcan  
// +----------------------------------------------------------------------
// | Date: 2018/3/30 0030 Time: 18:40
// +----------------------------------------------------------------------
namespace Home\Model;
use Think\Model;
class FormModel extends Model{
    protected  $_validate = array(
        array('title','require','标题必须'),
    );
    protected $_auto = array(
        array('create_time','time',1,'function'),
    );
}