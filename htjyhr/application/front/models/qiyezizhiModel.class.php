<?php
// 字段类型模型
class qiyezizhiModel extends Model
{

    public function __construct()
    {
        parent::__construct("qiyezizhi");
    }

    //获取对应的公司简介
    public function getall(){
        $data=$this->orderBy('paixu desc,id desc')->limit(0,6)->all();
        return $data;
    }
    //获取首页展示的企业资质
    public function getsy(){
        $data=$this->orderBy('paixu desc,id desc')->limit(0,5)->all();
        return $data;
    }
}