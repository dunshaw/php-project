<?php
/**
 * Created by PhpStorm.
 * User: lldream
 * Date: 2018/11/14
 * Time: 18:32
 */

class yingpinxiaoxiModel extends Model{
    public function __construct()
    {
        parent::__construct("yingpinxiaoxi");
    }

    public function getFuJian($id){
        $data=$this->findOne($id);
        return $data;
    }
}