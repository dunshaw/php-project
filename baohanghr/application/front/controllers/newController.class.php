<?php
class newController extends baseController {
	//首页
	public function indexAction(){
        $sort=$this->common->Get('sort_id');
        $sort_id=310;
        $this->smarty->assign('sort_id',$sort_id);
        if($sort==310){
            $sort=312;
        }
        $this->smarty->assign('sort',$sort);
        //根据sort查询名称
        $ming=new sortModel();
        $mingList=$ming->getsortNameBysortid($sort);
        $this->smarty->assign('mingList',$mingList);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone($sort_id);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        $tableModel = new tableModel();
        $table_id = 19;
        $tableName = $tableModel->getTablenameByTableid($table_id);
        $_tableModel = new Model($tableName);
        $where ="fenlei={$sort}";	//查询条件
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
            "sort_id" =>$sort,
        );
        $page = new Page($total, $pagesize, $current, "/new", $pageUrl);
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
		$this->smarty->display("defualt".DS.'new.html');
	}
	public function detailAction(){
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone(310);
        $this->smarty->assign('banner',$bannerList);
	    $id=$this->common->Get('id');
	    $one=new xingyeqianyanModel();
	    $oneList=$one->getone($id);
	    $sort=$this->common->Get('sort');
        $this->smarty->assign('sort',$sort);
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
        $after=$one->getafter($oneList['id'],$sort);
        //获取下一篇新闻
        $next=$one->getnext($oneList['id'],$sort);
        $this->smarty->assign('next',$next);
        $this->smarty->assign('after',$after);
        $this->smarty->display("defualt".DS.'newdetail.html');
    }
}