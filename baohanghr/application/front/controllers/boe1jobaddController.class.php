<?php
class boe1jobaddController extends baseController {
	//首页
	public function indexAction(){
        $sort=$this->common->Get('sort_id');
        $sort_id=321;
        $this->smarty->assign('sort_id',$sort_id);
        $this->smarty->assign('sort',$sort);

        //获取联系我们信息
        $lian=new lianxiwomenModel();
        $lianList=$lian->getone();
        $this->smarty->assign('lian',$lianList);
        $this->smarty->display("defualt".DS.'boe1jobadd.html');
	}
}