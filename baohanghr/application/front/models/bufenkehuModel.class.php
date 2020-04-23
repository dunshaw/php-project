<?php
// 字段类型模型
class bufenkehuModel extends Model
{

    public function __construct()
    {
        parent::__construct("bufenkehu");
    }

    //获取对应的产品方案
    public function getall(){
        $data=$this->orderBy('paixu desc,id desc')->all();
        return $data;
    }

}