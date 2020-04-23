<?php
// 字段类型模型
class gongsijieshaotubiaoModel extends Model
{

    public function __construct()
    {
        parent::__construct("gongsijieshaotubiao");
    }

    //获取对应的公司简介
    public function getall(){
        $data=$this->orderBy('id asc')->all();
        return $data;
    }

}