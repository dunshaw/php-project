<?php
// 字段类型模型
class parameterModel extends Model
{

    public function __construct()
    {
        parent::__construct("parameter");
    }

    //获取对应的产品方案
    public function getNameById($id){
        $data=$this->findOne($id);
        return $data;
    }

}