<?php
// 字段类型模型
class qiyefengcaiModel extends Model
{

    public function __construct()
    {
        parent::__construct("qiyefengcai");
    }

    //获取公司文化内容
    public function getall($id,$num){
        $data=$this->where(['fenlei'=>$id])->orderBy('paixu desc,id desc')->limit(0,$num)->all();
        return $data;
    }

}