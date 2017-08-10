<?php
namespace Admin\Model;
use Think\Model;

class ProModel extends Model{

    protected $_validate = array(
        array('name', 'require', '姓名不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
        array('tel', 'require', '电话不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
        array('address', 'require', '地址不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
        array('title', 'require', '标题不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
    );

    protected $_auto = array(
        array('time', NOW_TIME, self::MODEL_INSERT),
        array('status', '0', self::MODEL_BOTH),

    );

}
