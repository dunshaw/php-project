<?php
// 字段类型模型
class lianxiwomenModel extends Model
{

    public function __construct()
    {
        parent::__construct("lianxiwomen");
    }

    //获取对应的公司简介
    public function getone(){
        $data=$this->orderBy('id desc')->one();
        return $data;
    }

}