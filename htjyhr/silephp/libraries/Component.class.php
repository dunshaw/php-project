<?php

class Component
{
    public $common;
    
    
    public function __construct()
    {
        $this->common = new Common();
    }
    
    /*
     * 加载自定义控件方法
     * $kjName        $v['u2']
     * $filedName     $v['u1']
     * $selectValue   $wenzhang[$v['u1']]
     * $tipString     $v['u3']
     * $filedId
     * */
    public function getKj($type,$kjName,$filedName,$selectValue,$tipString,$filedId,$width=""){
        if($type=="文本域")
        {
            
            return '<div class="layui-form-item layui-form-text">
                         <label class="layui-form-label">'.$kjName.'</label>
                         <div class="layui-input-block">
                            <textarea name="'.$filedName.'"  placeholder="请输入内容" class="layui-textarea" style="width:'.$width.'" >'.$selectValue.'</textarea>
                         </div>
                         <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
        }else if($type=="图片")
        {
            $_js_str="
	            <script type='text/javascript'>
	               //iframe窗
	               function upload_".$filedName."()
                   {
                       layOpen('上传图片','/admin/inc/showwebuploader?type=image&field=".$filedName."');
                           
                   }
                 </script>
	               ";
            
            
            return  $_js_str.'<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input type="hidden" name="'.$filedName.'" value="'.$selectValue.'"  id="'.$filedName.'"  >
                            <a id="img_a_'.$filedName.'"  href="'.$selectValue.'"  target="_blank" >
				    		       <img id="img_'.$filedName.'" src="'.$selectValue.'" class="layui-upload-img" style="max-width: 200px;max-height: 100px;overflow: hidden;" onerror="javascript:this.src=\'/application/admin/views/images/nopic.jpg\';" />
				    		</a>
                            <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                          </div>
                          <button onclick="upload_'.$filedName.'()"  type="button" class="layui-btn" id="test-upload-normal">上传图片</button>
                    </div>';
            
            
        }else if($type=="单选")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            $temp_radio_html=' ';
            $i=1;
            
            if($filedVal==$selectValue || $selectValue=="")
            {
                //                 $temp_radio_html.='<input id="'.$filedName.'" type="radio" name="'.$filedName.'" checked="checked" value=" ">请选择  ';
            }
            
            foreach($filedVal as $key=>$val)
            {
                if($selectValue==trim($val['key']) )
                {
                    $temp_radio_html.='<input id="'.$filedName.'" type="radio" name="'.$filedName.'" checked="checked"  title="'.$val['value'].'"  value="'.$val['key'].'">';
                }else{
                    $temp_radio_html.='<input id="'.$filedName.'" type="radio" name="'.$filedName.'"  title="'.$val['value'].'"  value="'.$val['key'].'" >';
                }
                $i++;
            }
            
            
            return '<div class="layui-form-item">
						<label class="layui-form-label">'.$kjName.'</label>
						<div class="layui-input-block">
						'.$temp_radio_html.'
						</div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
					</div>
                 ';
            
            
        }else if($type=="多选")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            $temp_radio_html=' <input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">';
            $i=1;
            
            //选中值数组
            $selectValueArray=explode(",", $selectValue);
            foreach($filedVal as $key=>$val)
            {
                
                
                if(in_array(trim($val['key']),$selectValueArray) )
                {
                    $temp_radio_html.='    <input lay-skin="primary" data-filedname="'.$filedName.'" lay-filter="checkboxchange"  class="'.$filedName.$filedId.'" id="'.$filedName.$filedId.$i.'" type="checkbox" name="'.$filedName.$filedId.'" checked="checked" value="'.$val['key'].'" title="'.$val['value'].'"  >';
                }else{
                    $temp_radio_html.='    <input lay-skin="primary" data-filedname="'.$filedName.'" lay-filter="checkboxchange"   class="'.$filedName.$filedId.'" id="'.$filedName.$filedId.$i.'" type="checkbox" name="'.$filedName.$filedId.'"  value="'.$val['key'].'"   title="'.$val['value'].'"  >';
                }
                
                $i++;
            }
            
            return '<div class="layui-form-item">
						<label class="layui-form-label">'.$kjName.'</label>
						<div class="layui-input-block">
						'.$temp_radio_html.'
						</div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
					</div>
                 ';
            
            
        }else if($type=="文本编辑器")
        {
            
            return '<div class="layui-form-item">
                         <label class="layui-form-label">'.$kjName.'</label>
                         <div class="layui-input-block">
                              <script id="'.$filedName.'" name="'.$filedName.'" type="text/plain" style="width:100%">'.html_entity_decode($selectValue).'</script>
                              <script type="text/javascript">
                                var ue_'.$filedName.' = UE.getEditor("'.$filedName.'");
                              </script>
                         </div>
                    </div>';
            
            
        }else if($type=="时间框")
        {
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input type="text"   name="'.$filedName.'" id="'.$filedName.'" value="'.$selectValue.'"     placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input ghy-date">
                          </div>
                          <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>
                              
                    ';
            
        }else if($type=="金额")
        {
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input name="'.$filedName.'"  id="'.$filedName.'"  value="'.$selectValue.'"  placeholder="请输入'.$kjName.'"  lay-verify="number" placeholder="￥"  autocomplete="off" class="layui-input"   >
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
        }else if($type=="数字")
        {
            
            if($selectValue==""){
                $filedModel1=new filedModel();
                $selectValue=$filedModel1->getFiledDefaultValue($filedId);
            }
            
            
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input name="'.$filedName.'"  id="'.$filedName.'" value="'.$selectValue.'" placeholder="请输入'.$kjName.'"  lay-verify="number"   autocomplete="off" class="layui-input"   >
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
        }
        else if($type=="密码")
        {
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input type="password"  name="'.$filedName.'" placeholder="请输入'.$kjName.'"  id="'.$filedName.'" lay-verify="pass"   autocomplete="off" class="layui-input"   >
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
        } else if($type=="联动")
        {
            if(strlen($selectValue)==0)
            {
                $filedModel1=new filedModel();
                $filedVal=$filedModel1->getFiledDefaultValue($filedId);
                
                return '<tr style="display: table-row;">
				    		    <th>'.$kjName.'</th>
				    		    <td><div id="liandong_'.$filedName.'" class="liandong1" >'.
				    		    $this->getLiandongHtml($filedVal,$filedName).
				    		    '</div><input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">'.
				    		    '</td>
                        </tr>';
            }else
            {
                $filedModel1=new filedModel();
                $filedVal=$filedModel1->getFiledDefaultValue($filedId);
                
                //默认值
                $classid=$filedVal;
                //已选中，递归全部选中项
                //$temp_html=$this->getAllLiandongHtml($selectValue,$filedName,$classid,"");
                return '<tr style="display: table-row;">
				    		    <th>'.$kjName.'</th>
				    		    <td><div id="liandong_'.$filedName.'" class="liandong1" >'.
				    		    $this->getAllLiandongHtml($selectValue,$filedName,$classid,"").
				    		    '</div><input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">'.
				    		    '</td>
                        </tr>';
            }
            
            
            
        }else if($type=="组图")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-block">
                              
                            <fieldset class="layui-elem-field site-demo-button">
                    			<legend>图片列表</legend>
                    			<ul id="thumbnails" class="picBox">
                              
                                    <input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">
                                    <iframe width="100%" onload="this.height=50" src="/admin/inc/addWebuploader?field='.$filedName.'" scrolling="no" frameborder="0" id="if'.$filedName.'" ></iframe>
                            	        <script>
                            	        function reinitIframe'.$filedName.'(){
                            	            var iframe'.$filedName.' = document.getElementById("if'.$filedName.'");
                            	            try{
                            	                var bHeight = iframe'.$filedName.'.contentWindow.document.body.scrollHeight;
                            	                var dHeight = iframe'.$filedName.'.contentWindow.document.documentElement.scrollHeight;
                            	                var height = Math.max(bHeight, dHeight);
                            	                iframe'.$filedName.'.height = height;
                            	                //console.log(height);
                            	            }catch (ex){}
                            	        }
                            	        window.setInterval("reinitIframe'.$filedName.'()", 200);
                            	        </script>
                            	            
                    			</ul>
                    		</fieldset>
                            	            
                          </div>
                         <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
            
        }else if($type=="文件")
        {
            $_js_str="
	            <script type='text/javascript'>
	               //iframe窗
	               function upload_".$filedName."()
                   {
                       layer.open({
                          type: 2,
                          title: '上传文件 ',
                          shadeClose: true,
                          shade: false,
                          maxmin: true, //开启最大化最小化按钮
                          area: ['500px', '500px'],
                          content: '/admin/inc/showwebuploader?type=file&field=".$filedName."'
                       });
                   }
                 </script>
	               ";
            
            return  $_js_str.'<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                        <div class="layui-input-inline">
                            <button onclick="upload_'.$filedName.'()"  type="button" class="layui-btn" id="test-upload-normal">上传文件</button>
                        </div>
                                
                          <div class="layui-input-inline">
                            <input type="hidden" name="'.$filedName.'" value="'.$selectValue.'"  id="'.$filedName.'"  >
                             <a id="file_'.$filedName.'"  href="'.$selectValue.'"  target="_blank" >'.$selectValue.'</a>
                          </div>
                                 
                                 
                    </div>';
            
            
            //             return $_js_str.' <tr style="display: table-row;">
            // 				    		    <th>'.$kjName.'</th>
            // 				    		    <td>
            // 				    		    <input type="hidden" name="'.$filedName.'"  id="'.$filedName.'"  >
            // 				    		    <a id="file_'.$filedName.'"  href="'.$selectValue.'"  target="_blank" >'.$selectValue.'</a>
            //                                 <a onclick="upload_'.$filedName.'()"  class="btn btn-blue"><em class="ficon  ficon-uploading"></em> 上传文件</a>
            //                                 <i>'.$tipString.'</i>
            // 				    		    </td>
            // 				    	     </tr>';
            
            
        }else if($type=="下拉框")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            
            //var_dump($filedVal);die();
            $selectedStr = "";
            foreach ($filedVal as $k=>$v){
                if($selectValue==$v["key"])
                {
                    $selectedStr.='<option value="'.$v["key"].'" selected="selected" >'.$v["value"].'</option>';
                }else{
                    $selectedStr.='<option value="'.$v["key"].'">'.$v["value"].'</option>';
                }
                
                
            }
            
            return '<div class="layui-form-item">
						<label class="layui-form-label">'.$kjName.'</label>
						<div class="layui-input-inline">
						<select name="'.$filedName.'" id="'.$filedName.'"  lay-search=""  >
							<option value="">请选择'.$kjName.'</option>
							'.$selectedStr.'
						</select>
						</div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
					</div>';
            
            
        }else if($type=="多条记录")
        {
            $commomClass = new Common();
            $filedModel1=new filedModel();
            $filedValArray=$filedModel1->getFiledDefaultValue($filedId);
            $_model_id=$filedValArray["modelid"];
            $_guanlianziduan=$filedValArray["fieldname"];//两张表通过关联的字段
            if($selectValue=="" || empty($selectValue))
            {
                $selectValue = $commomClass->getOrderId();
            }
            //echo '/index.php?p=admin&c=Inc&a=showDuotiaojilu&model_id='.$_model_id.'&guanlianziduan_val='.$selectValue.'&guanlianziduan='.$_guanlianziduan.'&field='.$filedName.'&field_id='.$filedId.'';die();
            return '<div class="layui-form-item">
				    		    <label class="layui-form-label">'.$kjName.'</label>
				    		    <div class="layui-input-block">
                                <input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">
                                <iframe width="100%" onload="this.height=50" src="/admin/inc/showduotiaojilu?table_id='.$_model_id.'&guanlianziduan_val='.$selectValue.'&guanlianziduan='.$_guanlianziduan.'&field='.$filedName.'&field_id='.$filedId.'" scrolling="no" frameborder="0" id="if'.$filedName.'" ></iframe>
                    	        <script>
                    	        function reinitIframe'.$filedName.'(){
                    	            var iframe = document.getElementById("if'.$filedName.'");
                    	            try{
                    	                var bHeight = iframe.contentWindow.document.body.scrollHeight;
                    	                var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
                    	                var height = Math.max(bHeight, dHeight);
                    	                iframe.height = height;
                    	                //console.log(height);
                    	            }catch (ex){}
                    	        }
                    	                
                    	        window.setInterval("reinitIframe'.$filedName.'()", 200);
                    	        </script>
                                </div>
                        </div>';
            
            
        }else if($type=="编号")  {
            
            $commomClass = new Common();
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            $tableId = $filedModel1->getTableidByFieldid($filedId);
            if($selectValue==""|| $selectValue==$filedVal){
                $selectValue=$filedVal.$commomClass->getOrderId();
                $commomClass->set_cookie("{$tableId}_number", $selectValue);
            }
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input readonly="readonly"  name="'.$filedName.'"  id="'.$filedName.'" value="'.$selectValue.'"  placeholder="请输入'.$kjName.'"   autocomplete="off" class="layui-input"   >
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
        }else if($type=="商品规格")
        {
            $commomClass = new Common();
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            $tableId = $filedModel1->getTableidByFieldid($filedId);
            if($selectValue=="" || empty($selectValue))
            {
                //$selectValue = $commomClass->getOrderId();
                $selectValue = $commomClass->get_cookie("{$tableId}_number");
            }
            //echo '/index.php?p=admin&c=Inc&a=showDuotiaojilu&model_id='.$_model_id.'&guanlianziduan_val='.$selectValue.'&guanlianziduan='.$_guanlianziduan.'&field='.$filedName.'&field_id='.$filedId.'';die();
            return '<div class="layui-form-item">
				    		    <label class="layui-form-label">'.$kjName.'</label>
				    		    <div class="layui-input-block">
                                <input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">
                                <iframe width="100%" onload="this.height=50" src="/admin/inc/goodsparameter?field='.$filedName.'&field_id='.$filedId.'&classid='.$filedVal.'&goodnumber='.$selectValue.' " scrolling="no" frameborder="0" id="if'.$filedName.'" ></iframe>
                    	        <script>
                    	        function reinitIframe'.$filedName.'(){
                    	            var iframe = document.getElementById("if'.$filedName.'");
                    	            try{
                    	                var bHeight = iframe.contentWindow.document.body.scrollHeight;
                    	                var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
                    	                var height = Math.max(bHeight, dHeight);
                    	                iframe.height = height;
                    	                //console.log(height);
                    	            }catch (ex){}
                    	        }
                    	                
                    	        window.setInterval("reinitIframe'.$filedName.'()", 200);
                    	        </script>
                                </div>
                        </div>';
            
            
        }else if($type=="商品价格")
        {
            $commomClass = new Common();
            $filedModel1=new filedModel();
            $tableId = $filedModel1->getTableidByFieldid($filedId);
            
            if($selectValue=="" || empty($selectValue))
            {
                $selectValue = $commomClass->get_cookie("{$tableId}_number");
            }
            //echo '/index.php?p=admin&c=Inc&a=showDuotiaojilu&model_id='.$_model_id.'&guanlianziduan_val='.$selectValue.'&guanlianziduan='.$_guanlianziduan.'&field='.$filedName.'&field_id='.$filedId.'';die();
            return '<div class="layui-form-item">
				    		    <label class="layui-form-label">'.$kjName.'</label>
				    		    <div class="layui-input-block">
                                <input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">
                                <iframe width="100%" onload="this.height=50" src="/admin/inc/showgoodsprice?field='.$filedName.'&field_id='.$filedId.'&goods_number='.$selectValue.'" scrolling="no" frameborder="0" id="if'.$filedName.'" ></iframe>
                    	        <script>
                    	        function reinitIframe'.$filedName.'(){
                    	            var iframe'.$filedName.' = document.getElementById("if'.$filedName.'");
                    	            try{
                    	                var bHeight = iframe'.$filedName.'.contentWindow.document.body.scrollHeight;
                    	                var dHeight = iframe'.$filedName.'.contentWindow.document.documentElement.scrollHeight;
                    	                var height = Math.max(bHeight, dHeight);
                    	                iframe'.$filedName.'.height = height;
                    	                //console.log(height);
                    	            }catch (ex){}
                    	        }
                    	                    
                    	        window.setInterval("reinitIframe'.$filedName.'()", 200);
                    	        </script>
                                </div>
                        </div>';
            
            
        }else if($type=="省市县三级联动")
        {
            $filedModel1=new filedModel();
            //$filedVal=$filedModel1->getFiledDefaultValue($filedId);
            return '<tr style="display: table-row;">
				    		    <th>'.$kjName.'</th>
				    		    <td>'.
				    		    '<input name="'.$filedName.'" id="'.$filedName.'" type="hidden"  value="'.$selectValue.'">'.
				    		    '
                                <iframe width="100%" onload="this.height=50" src="/index.php?p=admin&c=Inc&a=showdiqu&field='.$filedName.'&field_id='.$filedId.'" scrolling="no" frameborder="0" id="if'.$filedName.'" ></iframe>
                    	        <script>
                    	        function reinitIframe'.$filedName.'(){
                    	            var iframe = document.getElementById("if'.$filedName.'");
                    	            try{
                    	                var bHeight = iframe.contentWindow.document.body.scrollHeight;
                    	                var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
                    	                var height = Math.max(bHeight, dHeight);
                    	                iframe.height = height;
                    	                //console.log(height);
                    	            }catch (ex){}
                    	        }
                    	        window.setInterval("reinitIframe'.$filedName.'()", 200);
                    	        </script>'.
                    	        '</td>
                        </tr>';
            
            
        }else if($type=="省市县（省）"){
            $model = new ModelNew("area");
            $datas = $model->where(["area_parent_id"=>0])->find("id,area_name")->all();
            if ($selectValue){
                $str = "<option value='".$selectValue."' selected>".self::selectCity($selectValue)."</option>";
            }else{
                $str = "<option value=''>==请选择==</option>";
            }
            
            foreach ($datas as $v){
                $str .= '<option value="'.$v['id'].'">'.$v["area_name"].'</option>';
            }
            return '<tr style="display: table-row">
            <th>'.$kjName.'</th>
            <td><select name="'.$filedName.'" id="province" onchange="show(1)" class="input">'.$str.'</select></td></tr>
            <script >
                function show(type){
                    if (type==1){
                        var pid = $("#province").val();
                    }else if (type==2){
                        var pid = $("#city").val();
                    }
                     $.post("index.php?p=admin&c=common&a=selectArea",{pid:pid},function(data) {
                           var str = "<option value>==请选择==</option>";
                           $.each(data,function(index,value) {
                             str += "<option value="+value.id+">"+value.area_name+"</option>"
                           })
                           if (type==1){
                               $("#city").html(str);
                               $("#area").html("<option value>==请选择==</option>")
                           }
                           if (type==2){
                               $("#area").html(str)
                           }
                    },"json")
                }
            </script>';
        }else if($type=="省市县（市）"){
            if ($selectValue){
                $str = "<option value='".$selectValue."' selected>".self::selectCity($selectValue)."</option>";
            }else{
                $str = "<option value=''>==请选择==</option>";
            }
            return '<tr style="display: table-row"><th>'.$kjName.'</th><td><select name="'.$filedName.'" id="city" onchange="show(2)" class="input">'.$str.'</select></td></tr><script ></script>';
        }else if($type=="省市县（县）"){
            if ($selectValue){
                $str = "<option value='".$selectValue."' selected>".self::selectCity($selectValue)."</option>";
            }else{
                $str = "<option value=''>==请选择==</option>";
            }
            return '<tr style="display: table-row"><th>'.$kjName.'</th><td><select name="'.$filedName.'" id="area" class="input">'.$str.'</select></td></tr><script ></script>';
        }else if($type=="城市选择器(多选)")
        {
            $_js_str="
	            <script type='text/javascript'>
	               //iframe窗
	               function upload_".$filedName."()
                   {
                       layer.open({
                          type: 2,
                          title: '城市选择器 ',
                          shadeClose: true,
                          shade: false,
                          maxmin: true, //开启最大化最小化按钮
                          area: ['893px', '600px'],
                          content: '/index.php?p=admin&c=inc&a=SelectCity&type=duoxuan&field=".$filedName."'
                       });
                   }
                 </script>
	               ";
            $selectValue_array = explode("|",$selectValue);
            if(count($selectValue_array)<2)
            {
                $selectValue1=$selectValue;
                $selectValue2=$selectValue;
            }else
            {
                $selectValue1=$selectValue_array[0];
                $selectValue2=$selectValue_array[1];
            }
            return $_js_str.' <tr style="display: table-row;">
				    		    <th>'.$kjName.'</th>
				    		    <td>
				    		    <input type="hidden"  name="temp_'.$filedName.'"  data-value="'.$selectValue1.'"  value="'.$selectValue2.'"  id="temp_'.$filedName.'"  >
				    		    <input  type="hidden"   class="input" type="text"  readonly="readonly"  name="'.$filedName.'"    value="'.$selectValue.'"  id="'.$filedName.'"  >
                                <a id="city_a_'.$filedName.'"  target="_blank" >
				    		    '.$selectValue2.'
                                </a>
				    		    <a onclick="upload_'.$filedName.'()"  class="btn btn-blue"><em class="ficon  ficon-uploading"></em> 选择城市</a>
                                <i>'.$tipString.'</i>
				    		    </td>
				    	     </tr>';
            
            
        }else if($type=="城市选择器(单选)")
        {
            $_js_str="
	            <script type='text/javascript'>
	               //iframe窗
	               function upload_".$filedName."()
                   {
                       layer.open({
                          type: 2,
                          title: '城市选择器 ',
                          shadeClose: true,
                          shade: false,
                          maxmin: true, //开启最大化最小化按钮
                          area: ['893px', '600px'],
                          content: '/index.php?p=admin&c=inc&a=SelectCity&type=danxuan&field=".$filedName."'
                       });
                   }
                 </script>
	               ";
            $selectValue_array = explode("|",$selectValue);
            if(count($selectValue_array)<2)
            {
                $selectValue1=$selectValue;
                $selectValue2=$selectValue;
            }else
            {
                $selectValue1=$selectValue_array[0];
                $selectValue2=$selectValue_array[1];
            }
            return $_js_str.' <tr style="display: table-row;">
				    		    <th>'.$kjName.'</th>
				    		    <td>
				    		    <input type="hidden"  name="temp_'.$filedName.'"  data-value="'.$selectValue1.'"  value="'.$selectValue2.'"  id="temp_'.$filedName.'"  >
				    		    <input  type="hidden"   class="input" type="text"  readonly="readonly"  name="'.$filedName.'"    value="'.$selectValue.'"  id="'.$filedName.'"  >
                                <a id="city_a_'.$filedName.'"  target="_blank" >
				    		    '.$selectValue2.'
                                </a>
				    		    <a onclick="upload_'.$filedName.'()"  class="btn btn-blue"><em class="ficon  ficon-uploading"></em> 选择城市</a>
                                <i>'.$tipString.'</i>
				    		    </td>
				    	     </tr>';
            
            
        }else if($type=="批量上传")
        {
            $_js_str="
                <script src='".CUR_TPL_PATH."/js/jquery.js'></script>
                <script src='".CUR_TPL_PATH."/js/jquery.lazyload.js'></script>
	            <script type='text/javascript'>
	               //iframe窗
	               function upload_".$filedName."()
                   {
                       var _path=$('#".$filedName."').val();
                       if(_path=='' || _path ==undefined)
                       {
                            alert('请选择保存路径');
                            return false;
                        }
                       layer.open({
                          type: 2,
                          title: '批量上传',
                          shadeClose: true,
                          shade: false,
                          maxmin: true, //开启最大化最小化按钮
                          area: ['80%', '100%'],
                          content: '/admin/inc/batchupload?field=".$filedName."&path='+_path
                       });
                   }
                              
                              
                              
                    $(function() {
                      $('img').lazyload({
                      placeholder : 'application/views/admin/images/nopic.jpg',
                             effect: 'fadeIn'
                       });
                    });
                 </script>
	               ";
            $commomClass = new Common();
            $my_filepath=(empty($selectValue) || $selectValue=="" )?"":"/".$selectValue;//ghy 默认保存路径
            $uploadDir = $GLOBALS['config_cache']['UPLOAD_DIR'].'upload'.$my_filepath;
            $files = $commomClass->getFileNameByDir($uploadDir);
            //<img id="img_'.$filedName.'" src="'.$selectValue.'" style="max-width: 200px;max-height: 100px;overflow: hidden;" onerror="javascript:this.src=\'application/views/admin/images/nopic.jpg\';" />
            $img_html ="";
            foreach ($files as $k=>$v)
            {
                if($my_filepath=="")
                    break;
                    $img_html.='<img src="application/views/admin/images/loading.gif"  data-original="'.$v.'" style="max-width: 200px;max-height: 100px;overflow: hidden;"   /> ';
                    
            }
            
            return  $_js_str.'<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input name="'.$filedName.'"  id="'.$filedName.'" value="'.$selectValue.'"  placeholder="请输入'.$kjName.'"   autocomplete="off" class="layui-input"   >
                            <button onclick="upload_'.$filedName.'()" type="button" class="layui-btn" id="test-upload-normal">上传文件</button>
'. $img_html.'
                          </div>
    
                        <div class="layui-form-mid layui-word-aux">上传路径:'.$uploadDir.$tipString.'</div>
                    </div>';
            
            
            
        }else if($type=="单行输入框")
        {
            
            
            return '<div class="layui-form-item">
                        <label class="layui-form-label">'.$kjName.'</label>
                        <div class="layui-input-block">
                          <input type="text" name="'.$filedName.'"   autocomplete="off" placeholder="请输入'.$kjName.'" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
            
        }else  {
            
            if($filedName=="laiyuanbianhao" && !empty($_GET['guanlianziduan_val']))
            {
                if($_GET['guanlianziduan']==$filedName)
                {
                    $selectValue=$_GET['guanlianziduan_val'];
                }
                
            }
            
            return  '<div class="layui-form-item">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input name="'.$filedName.'"  id="'.$filedName.'" value="'.$selectValue.'"  placeholder="请输入'.$kjName.'"   autocomplete="off" class="layui-input"   >
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>';
        }
        
    }
    
    
    /*
     * 显示自定义控件方法
     * $kjName        $v['u2']
     * $filedName     $v['u1']
     * $selectValue   $wenzhang[$v['u1']]
     * $tipString     $v['u3']
     * $filedId
     * */
    public function showKj($type,$kjName,$filedName,$selectValue,$tipString,$filedId){
        if($type=="单选" ||$type=="多选"||$type=="下拉框")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            
            //var_dump($filedVal);die();
            $selectedStr = "";
            foreach ($filedVal as $k=>$v){
                if($selectValue==$v["key"])
                {
                    if($selectedStr==""){
                        $selectedStr=$v["value"];
                    }else{
                        $selectedStr = $selectedStr.",".$v["value"];
                    }
                    
                }
                
            }
            return $selectedStr;
            
        }else if($type=="文本编辑器")
        {
            return  html_entity_decode($selectValue) ;
            
        }else if($type=="文本域")
        {
            return  html_entity_decode($selectValue) ;
            
        } 
        else  {
            
            return $selectValue;
        }
        
    }
    
    
    /*
     * 显示自定义控件内容方法
     * $kjName        $v['u2']
     * $filedName     $v['u1']
     * $selectValue   $wenzhang[$v['u1']]
     * $tipString     $v['u3']
     * $filedId
     * */
    public function showvalueKj($type,$kjName,$filedName,$selectValue,$tipString,$filedId){
        if($type=="单选" ||$type=="多选"||$type=="下拉框")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            
            //var_dump($filedVal);die();
            $selectedStr = "";
            foreach ($filedVal as $k=>$v){
                if($selectValue==$v["key"])
                {
                    if($selectedStr==""){
                        $selectedStr=$v["value"];
                    }else{
                        $selectedStr = $selectedStr.",".$v["value"];
                    }
                    
                }
                
            }
            return $selectedStr;
            
        }else if($type=="文本编辑器")
        {
            return  html_entity_decode($selectValue) ;
            
        }else if($type=="文本域")
        {
            return  html_entity_decode($selectValue) ;
            
        }else if($type=="组图")
        {
            
            $filedVal=$this->common->zutuStr2Array($selectValue);
            return $filedVal;
        }
        else  {
            
            return $selectValue;
        }
        
    }
    
    
    /*
     * 使用查询时显示控件方法
     * $kjName        $v['u2']
     * $filedName     $v['u1']
     * $selectValue   $wenzhang[$v['u1']]
     * $tipString     $v['u3']
     * $filedId
     * */
    public function serchKj($type,$kjName,$filedName,$selectValue,$tipString,$filedId){
        if($type=="时间框")
        {
            
            return  '<div class="layui-inline">
                          <label class="layui-form-label">'.$kjName.'</label>
                          <div class="layui-input-inline">
                            <input type="text"   name="'.$filedName.'" id="'.$filedName.'" value="'.$selectValue.'"     placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input ghy-date">
                          </div>
                        <div class="layui-form-mid layui-word-aux">'.$tipString.'</div>
                    </div>
                            
                    ';
            
        }else if($type=="下拉框" || $type=="单选")
        {
            $filedModel1=new filedModel();
            $filedVal=$filedModel1->getFiledDefaultValue($filedId);
            
            //var_dump($filedVal);die();
            $selectedStr = "";
            foreach ($filedVal as $k=>$v){
                if($selectValue==$v["key"])
                {
                    $selectedStr.='<option value="'.$v["key"].'" selected="selected" >'.$v["value"].'</option>';
                }else{
                    $selectedStr.='<option value="'.$v["key"].'">'.$v["value"].'</option>';
                }
                
                
            }
            
            return '<div class="layui-inline">
									<label class="layui-form-label">'.$kjName.'</label>
									<div class="layui-input-inline">
									<select name="'.$filedName.'" id="'.$filedName.'"  lay-search=""  >
										<option value="">请选择'.$kjName.'</option>
										'.$selectedStr.'
									</select>
									</div>
								</div>';
            
            
        }else  {
            
            
            return '<div class="layui-inline">
                        <label class="layui-form-label">'.$kjName.'</label>
                        <div class="layui-input-inline">
                          <input type="text"  name="'.$filedName.'"  id="'.$filedName.'" value="'.$selectValue.'"   placeholder="请输入'.$kjName.'" autocomplete="off" class="layui-input">
                        </div>
                  </div>';
        }
        
    }
    
    
    
}
