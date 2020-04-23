<?php
class focusController extends baseController {
	//首页
	public function indexAction(){
        $type=$this->common->Get('type');
        $sort_id=294;
        $id=$this->common->Get('sort_id');
        $this->smarty->assign('sort_id',$sort_id);
        $this->smarty->assign('id',$id);
        $this->smarty->assign('type',$type);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone(294);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        //获取公司简介
        $gong=new gongsijieshaoModel();
        $gongList=$gong->getone();
        $this->smarty->assign('gong',$gongList);
        //获取图标
        $tu=new gongsijieshaotubiaoModel();
        $tuList=$tu->getall();
        $this->smarty->assign('tu',$tuList);
        //获取企业文化
        $wen=new qiyewenhuaModel();
        $wenList=$wen->getall();
        $this->smarty->assign('wen',$wenList);
        //获取企业资质
        $tableModel = new tableModel();
        $table_id = 12;
        $tableName = $tableModel->getTablenameByTableid($table_id);
        $_tableModel = new Model($tableName);
        $where ="";	//查询条件
        // 载入分页类
        include LIB_PATH . "Page2.class.php";
        // 获取数据总条数
        $total = $_tableModel->total($where);
        // 指定分页数，每一页显示的记录数
        $pagesize = 6;
        // $pagesize = $GLOBALS['config']['pagesize'];
        // 获取当前页数，默认是1
        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current - 1) * $pagesize;
        // 使用模型完成数据的查询
        $tableList = $_tableModel->pageRows($offset, $pagesize, $where,"paixu desc,id desc");
        // 使用分页类获取分页信息
        $pageUrl=array(
            "sort_id" =>297,
            'type'=>3,
        );
        $page = new Page($total, $pagesize, $current, "/focus", $pageUrl);
        $pageinfo = $page->showPage();
        $this->smarty->assign('qi',$tableList);//使用模型完成数据的查询
        $this->smarty->assign('pageinfo',$pageinfo);//分页 1,2,3页
        //获取联系我们信息
        $lian=new lianxiwomenModel();
        $lianList=$lian->getall();
        $this->smarty->assign('lian',$lianList);
		$this->smarty->display("defualt".DS.'focus.html');
	}
}