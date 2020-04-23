<?php
class productController extends baseController {
	//首页
	public function indexAction(){
        $sort=$this->common->Get('sort_id');
        if($sort==299){
            $sort=300;
        }
        $type=$this->common->Get('type');
        if($type==1){
            $this->smarty->assign('typeValue', 1);
            $this->smarty->assign('typeName',"成都");
        }else{
            $this->smarty->assign('typeValue',2);
            $this->smarty->assign('typeName',"重庆");
        }
        $sort_id=299;
        $this->smarty->assign('sort',$sort);
        //根据sort查询名称
        $ming=new sortModel();
        $mingList=$ming->getsortNameBysortid($sort);
        $this->smarty->assign('mingList',$mingList);
        $this->smarty->assign('sort_id',$sort_id);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone($sort_id);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        //获取分类的内容
        $pin=new chanpinfanganModel();
        $pinList=$pin->getall($sort);
        $this->smarty->assign('pin',$pinList);
        //调用精彩案例
        $an=new jingcaianliModel();
        $anList=$an->gettwo();
        if(!empty($anList)){
            foreach ($anList as $k=>&$v){
                $v['dtime']=date('Y-m-d',strtotime($v['dtime']) );
                $v['day']=trim(strrchr($v['dtime'], '-'),'-');
                $v['year']= substr($v['dtime'],0,7);
            }
        }
        $this->smarty->assign('an',$anList);
		$this->smarty->display("defualt".DS.'product.html');
	}
}