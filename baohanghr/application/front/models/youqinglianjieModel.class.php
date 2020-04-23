<?php
// 字段类型模型
class youqinglianjieModel extends Model
{

    public function __construct()
    {
        parent::__construct("youqinglianjie");
    }

    //获取对应的公司简介
    public function getall(){
        $data=$this->orderBy('paixu desc,id desc')->all();
        return $data;
    }

}