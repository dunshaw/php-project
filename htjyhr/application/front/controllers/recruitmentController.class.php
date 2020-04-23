<?php
class recruitmentController extends baseController {
	//首页
	public function indexAction(){
	    $sort_id=$this->common->Get('sort_id');
	    $this->smarty->assign('sort_id',$sort_id);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone($sort_id);
        $bannerList['lianjie']=str_replace('amp;','',$bannerList['lianjie']);
        $this->smarty->assign('banner',$bannerList);
        $tableModel = new tableModel();
        $table_id = 20;
        $tableName = $tableModel->getTablenameByTableid($table_id);
        $_tableModel = new Model($tableName);
        $where ="";	//查询条件
        // 载入分页类
        include LIB_PATH . "Page2.class.php";
        // 获取数据总条数
        $total = $_tableModel->total($where);
        // 指定分页数，每一页显示的记录数
        $pagesize = 15;
        // $pagesize = $GLOBALS['config']['pagesize'];
        // 获取当前页数，默认是1
        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current - 1) * $pagesize;
        // 使用模型完成数据的查询
        $tableList = $_tableModel->pageRows($offset, $pagesize, $where,"paixu+0 desc, fabushijian desc, id desc");
        // 使用分页类获取分页信息
        $pageUrl=array(
            "sort_id" =>$sort_id,
        );
        $page = new Page($total, $pagesize, $current, "/recruitment", $pageUrl);
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
        $this->smarty->display("defualt".DS.'recruitment.html');
	}
	public function yingAction(){
        $sort_id=$this->common->Get('sort_id');
        $this->smarty->assign('sort_id',$sort_id);
        //获取banner
        $banner=new suoyoubannerModel();
        $bannerList=$banner->getone($sort_id);
        $this->smarty->assign('banner',$bannerList);
        $id=$this->common->Get('id');
        //通过id查询相应的岗位
        $gang=new zhaopinxinxiModel();
        $gangList=$gang->getone($id);
        $this->smarty->assign('gangwei',$gangList['zhiweimingcheng']);
        $this->smarty->display("defualt".DS.'yingpin.html');
    }
    public function tuAction(){
	    $arr=$_FILES;
	    if($arr['file']['size']>1024*1024*5){
            $arr_error['status']='false';
            $arr_error['msg']='附件大小超出限制';
            $arr_error['code']='1';
            $this->common->ajaxReturn($arr_error);exit;
        }
	    $arr_error=[];
	    $str=explode('.',$arr['file']['name']);
	    if($str['1']=='doc' || $str['1']=='docx'){
                $imgname = $_FILES['file']['name'];
                $ext=pathinfo($imgname);
                $ext=$ext['extension'];
                $str='upload_img';
                $less=time()-strtotime('2013-3-21').'.'.$ext;
                if(!file_exists($str)){
                    mkdir($str);
                }
                rename($imgname,$less);
                $arr=move_uploaded_file($_FILES["file"]["tmp_name"],'./'.$str.'/'.$less);
            if($arr){
                $touxiang='/'.$str.'/'.$less;
                $data_error['code']=0;
                $data_error['msg']='上传成功';
                $data_error['status']='true';
                $data_error['url']=$touxiang;
                $this->common->ajaxReturn($data_error);
            }else{
                $data_error['code']=1;
                $data_error['msg']='上传失败';
                $data_error['status']='false';
                $this->common->ajaxReturn($data_error);exit;
            }
        }else{
            $arr_error['status']='false';
            $arr_error['msg']='请上传doc|docx格式';
            $arr_error['code']='1';
            $this->common->ajaxReturn($arr_error);exit;
        }
    }

    public function deletefileAction(){
        $filename = $_POST['dataurl'];
        if (!unlink(".".$filename))
        {
            $data_error['code']=0;
            $data_error['msg']='删除失败';
            $data_error['status']='false';
        }
        else
        {
            $data_error['code']=1;
            $data_error['msg']='删除成功';
            $data_error['status']='true';
        }       
        $this->common->ajaxReturn($data_error);
    }
}