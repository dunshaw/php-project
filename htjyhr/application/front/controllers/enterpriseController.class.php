<?php
class enterpriseController extends baseController {
	//首页
	public function indexAction(){
        $sort_id=306;
        $this->smarty->assign('sort_id',$sort_id);
        $type=$this->common->Get('type');
        $this->smarty->assign('type',$type);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone($sort_id);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        //获取活动秀内容
        $qi=new qiyefengcaiModel();
        $qiList=$qi->getall(307,9);
        $this->smarty->assign('qi',$qiList);
        //获取劳务秀内容
        $lao=$qi->getall(308,5);
        $this->smarty->assign('lao',$lao);
        //获取年会秀内容
        $hui=$qi->getall(309,3);
        $this->smarty->assign('hui',$hui);
        //获取数字滚动
        $shu=new shuzigundongModel();
        $shuList=$shu->getall();
        $this->smarty->assign('shu',$shuList);
        $this->smarty->display("defualt".DS.'enterprise.html');
		
	}
}