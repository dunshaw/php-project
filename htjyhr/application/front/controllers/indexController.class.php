<?php
class indexController extends baseController {
	//首页
	public function indexAction(){
	    //获取首页banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getall(282);
        //循环去除链接中的amp;
        foreach($bannerList as $k=>$v){
            $bannerList[$k]['lianjie']=str_replace('amp;','',$v['lianjie']);
        }
        $this->smarty->assign('banner',$bannerList);
        //获取产品方案
        $pin=new parameterModel();
        $pinList=$pin->getNameById(359);
        $this->smarty->assign('pin',$pinList);
        //获取图标
        $tu=new shouyetubiaoModel();
        $tuList=$tu->getall();
        $this->smarty->assign('tu',$tuList);
        //获取宝航简介
        $bao=$pin->getNameById(360);
        $this->smarty->assign('bao',$bao);
        //获取数字滚动
        $shu=new shuzigundongModel();
        $shuList=$shu->getall();
        $this->smarty->assign('shu',$shuList);
        //获取新闻资讯
        $xin=$pin->getNameById(361);
        $this->smarty->assign('xin',$xin);
        //获取首页展示的新闻资讯
        $zi=new xingyeqianyanModel();
        $ziList=$zi->getsy();
        $this->smarty->assign('zi',$ziList);
        //查询部分客户
        $bu=$pin->getNameById(362);
        $this->smarty->assign('bu',$bu);
        $fen=new bufenkehuModel();
        $fenList=$fen->getall();
        $this->smarty->assign('fen',$fenList);
        //查询资质认证
        $zhi=$pin->getNameById(363);
        $this->smarty->assign('zhi',$zhi);
        //获取企业资质
        $qi=new qiyezizhiModel();
        $qiList=$qi->getsy();
        $this->smarty->assign('qi',$qiList);

        //获取合作伙伴的图片(从精彩案例表加载)
        $jingtu = new jingcaianliModel();
        // 载入分页类
        include LIB_PATH . "Page2.class.php";
        $tableList = $jingtu->pageRows(0, 8, "","paixu desc,dtime desc");
        $this->smarty->assign('jingtu',$tableList);//使用模型完成数据的查询


        $this->smarty->display("defualt".DS.'index.html');
        // 获取成功案例
        
	}
	public function daohangAction(){
        $this->smarty->display("defualt".DS.'ditu.html');
    }
}