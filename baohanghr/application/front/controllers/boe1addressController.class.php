<?php
class boe1addressController extends baseController {
	//首页
	public function indexAction(){
        $sort=$this->common->Get('sort_id');
        $sort_id=320;
        $this->smarty->assign('sort_id',$sort_id);
        $this->smarty->assign('sort',$sort);

        //获取联系我们信息
        $lian=new lianxiwomenModel();
        $lianList=$lian->getone();
        $this->smarty->assign('lian',$lianList);
        $this->smarty->display("defualt".DS.'boe1address.html');
	}
}