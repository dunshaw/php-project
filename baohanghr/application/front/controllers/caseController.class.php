<?php
class caseController extends baseController {
	//首页
	public function indexAction(){
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone(305);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        $tableModel = new tableModel();
        $table_id = 15;
        $tableName = $tableModel->getTablenameByTableid($table_id);
        $_tableModel = new Model($tableName);
        $where ="";	//查询条件
        // 载入分页类
        include LIB_PATH . "Page2.class.php";
        // 获取数据总条数
        $total = $_tableModel->total($where);
        // 指定分页数，每一页显示的记录数
        $pagesize = 8;
        // $pagesize = $GLOBALS['config']['pagesize'];
        // 获取当前页数，默认是1
        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current - 1) * $pagesize;
        // 使用模型完成数据的查询
        $tableList = $_tableModel->pageRows($offset, $pagesize, $where,"paixu desc,id desc");
        // 使用分页类获取分页信息
        $pageUrl=array(
            "sort_id" =>305,
        );
        $page = new Page($total, $pagesize, $current, "/case", $pageUrl);
        $pageinfo = $page->showPage();
        if(!empty($tableList)){
            foreach ($tableList as $k=>&$v){
                $v['dtime']=date('Y-m-d',strtotime($v['dtime']) );
                $v['day']=trim(strrchr($v['dtime'], '-'),'-');
                $v['year']= substr($v['dtime'],0,7);
            }
        }
        $this->smarty->assign('tableList',$tableList);//使用模型完成数据的查询
        $this->smarty->assign('pageinfo',$pageinfo);//分页 1,2,3页
		$this->smarty->display("defualt".DS.'case.html');
	}
	public function detailAction(){
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone(305);
        $this->smarty->assign('banner',$bannerList);
	    $id=$this->common->Get('id');
	    $one=new jingcaianliModel();
	    $oneList=$one->getone($id);
	    //处理时间
        $oneList['dtime']=date('Y-m-d',strtotime($oneList['dtime']) );
        //处理浏览量
        if(empty($oneList['dianjiliang'])){
            $oneList['dianjiliang']=1;
        }else{
            $oneList['dianjiliang']=$oneList['dianjiliang']*1+1;
        }
        //插入数据库
        $cha=$one->getupdate($id,$oneList['dianjiliang']);
        $this->smarty->assign('one',$oneList);
        //获取上一篇新闻
        $after=$one->getafter($id);
        //获取下一篇新闻
        $next=$one->getnext($id);
        $this->smarty->assign('next',$next);
        $this->smarty->assign('after',$after);
        $this->smarty->display("defualt".DS.'casedetail.html');
    }
}