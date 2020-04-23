<?php
// 字段类型模型
class chanpinfanganModel extends Model
{

    public function __construct()
    {
        parent::__construct("chanpinfangan");
    }

    //获取对应的产品方案
    public function getall($id){
        $data=$this->where(['fenlei'=>$id])->orderBy('paixu desc,id desc')->all();
        return $data;
    }

}