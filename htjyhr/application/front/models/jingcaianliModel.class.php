<?php
// 字段类型模型
class jingcaianliModel extends Model
{

    public function __construct()
    {
        parent::__construct("jingcaianli");
    }

    //获取单条新闻
    public function getone($id){
        $data=$this->where(['id'=>$id])->one();
        return $data;
    }
    //插入浏览量
    public function getupdate($id,$num){
        $data=$this->where(['id'=>$id])->update(['dianjiliang'=>$num]);
        return $data;
    }
    //获取产品方案调用的案例
    public function gettwo(){
        $data=$this->orderBy('paixu desc,id desc')->limit(0,2)->all();
        return $data;
    }
    //获取相同分类下的上一条新闻
    public function getafter($id){
        $data=$this->where(['id>'=>$id])->one();
        return $data;
    }
    //获取相同分类下的下一条新闻
    public function getnext($id){
        $data=$this->where(['id<'=>$id])->orderby('id desc')->one();
        return $data;
    }
}