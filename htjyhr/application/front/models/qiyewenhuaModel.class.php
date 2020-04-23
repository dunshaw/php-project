<?php
// 字段类型模型
class qiyewenhuaModel extends Model
{

    public function __construct()
    {
        parent::__construct("qiyewenhua");
    }

    //获取对应的公司简介
    public function getall(){
        $data=$this->orderBy('paixu desc,id desc')->limit(0,3)->all();
        return $data;
    }

}