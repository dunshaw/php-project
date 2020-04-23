<?php
// 字段类型模型
class xingyeqianyanModel extends Model
{

    public function __construct()
    {
        parent::__construct("xingyeqianyan");
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
    //获取首页展示的新闻
    public function getsy(){
        $data=$this->where(['fenlei'=>312])->orderBy('paixu desc,id desc')->limit(0,5)->all();
        return $data;
    }
    //获取相同分类下的上一条新闻
    public function getafter($id,$type){
        $data=$this->where(['fenlei'=>$type,'id>'=>$id])->one();
        return $data;
    }
    //获取相同分类下的下一条新闻
    public function getnext($id,$type){
        $data=$this->where(['fenlei'=>$type,'id<'=>$id])->orderby('id desc')->one();
        return $data;
    }

}