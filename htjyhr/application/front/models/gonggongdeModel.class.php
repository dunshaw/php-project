<?php
// 字段类型模型
class gonggongdeModel extends Model
{

    public function __construct()
    {
        parent::__construct("gonggongde");
    }

    //获取对应的产品方案
    public function getone(){
        $data=$this->orderBy('id desc')->one();
        return $data;
    }

}