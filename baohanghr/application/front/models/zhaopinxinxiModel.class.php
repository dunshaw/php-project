<?php
// 字段类型模型
class zhaopinxinxiModel extends Model
{

    public function __construct()
    {
        parent::__construct("zhaopinxinxi");
    }

    //获取对应的岗位
    public function getone($id){
        $data=$this->findOne($id);
        return $data;
    }

}