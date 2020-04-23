#学历和暂住地修改为可选填
alter table sl_yingpinxiaoxi  modify xueli char(100) null;
alter table sl_yingpinxiaoxi  modify zanzhudi char(100) null;

#前台显示的学历和暂住地修改为可选填
update sl_filed set u4="否" where model_id=21 and u1 in ("zanzhudi", "xueli");

#应聘时间在后台展示 并展示在倒数第二列
update sl_filed set u5="是",u10=6 where model_id=21 and u1="dtime";

#检索条件添加工作单位
update sl_filed set u6="是" where model_id=20 and u1="gongzuodanwei";

#检索条件添加备注单位
alter table sl_zhaopinxinxi add column beizhudanwei varchar(100) COMMENT "备注单位";	
INSERT INTO `sl_filed`( `model_id`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `u9`, `u10`, `u11`, `u12`, `u13`, `u14`, `u15`, `u16`, `u17`) VALUES ('20', 'beizhudanwei', '备注单位', '', '否', '是', '是', '文本框', '', '120', 5, '否', '', '', '无', '基础参数', '是', 'all');
update sl_filed set u10=6 where model_id=20 and u1="neirong";