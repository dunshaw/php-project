<?php
// 字段类型模型
class suoyoubannerModel extends Model
{

    public function __construct()
    {
        parent::__construct("suoyoubanner");
    }

    //获取首页banner
    public function getall($id){
        $data=$this->where(['fenlei'=>$id])->orderBy('id desc')->all();
        return $data;
    }
    //获取分类banner
    public function getone($id){
        $data=$this->where(['fenlei'=>$id])->orderBy('id desc')->one();
        return $data;
    }

}