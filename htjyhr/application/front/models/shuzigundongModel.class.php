<?php
// 字段类型模型
class shuzigundongModel extends Model
{

    public function __construct()
    {
        parent::__construct("shuzigundong");
    }

    //获取对应的产品方案
    public function getall(){
        $data=$this->orderBy('paixu desc,id desc')->limit(0,5)->all();
        return $data;
    }

}