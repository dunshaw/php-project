<?php
// 字段类型模型
class gongsijieshaoModel extends Model
{

    public function __construct()
    {
        parent::__construct("gongsijieshao");
    }

    //获取对应的公司简介
    public function getone(){
        $data=$this->orderBy('id desc')->one();
        return $data;
    }

}