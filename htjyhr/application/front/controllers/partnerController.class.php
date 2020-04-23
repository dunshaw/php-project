<?php
class partnerController extends baseController {
	//首页
    public function indexAction(){
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone(322);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        //获取产品方案
        $pin=new parameterModel();
        $pinList=$pin->getNameById(359);
        $this->smarty->assign('pin',$pinList);
        //获取图标
        $tu=new shouyetubiaoModel();
        $tuList=$tu->getall();
        $this->smarty->assign('tu',$tuList);
        //查询部分客户
        $bu=$pin->getNameById(362);
        $this->smarty->assign('bu',$bu);
        $fen=new bufenkehuModel();
        $fenList=$fen->getall();
        $this->smarty->assign('fen',$fenList);
        $this->smarty->display("defualt".DS.'partner.html');
        // 获取成功案例
    }
}