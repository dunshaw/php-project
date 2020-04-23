/* Created by SuMo , Date: 09/16/2019 */


/* 1.发布时间type变成DATETIME */
ALTER TABLE `sl_zhaopinxinxi` CHANGE COLUMN `fabushijian` `fabushijian` DATETIME NULL COMMENT '发布时间' ;
/* 2.将发布时间的文本框修改成时间框 */
UPDATE `sl_filed` SET `u7` = '时间框', `u8` = 'CURRENT_TIMESTAMP', `u12` = 'left' WHERE (`id` = '149');
/* 3.banner管理添加分类 */
UPDATE `sl_filed` SET `u8` = 'sql{sl_sort|where id in(282,284,294,299,305,306,310,314,315,316)|order by u4 asc,id asc|id,u1|}' WHERE (`id` = '204');
/* 4.添加全国热线*/
INSERT INTO `sl_filed` (`id`, `model_id`, `u1`, `u2`, `u4`, `u5`, `u6`, `u7`, `u9`, `u10`, `u11`, `u14`, `u15`, `u16`, `u17`) VALUES ('226', '13', 'quanguorexian', '全国热线', '是', '是', '否', '文本框', '80', '4', '否', '无', '基础参数', '是', 'all');
/* 5.修改nav信息*/
UPDATE `sl_sort` SET `u1` = '职池工作', `u5` = '/appwork' WHERE (`id` = '315');
UPDATE `sl_sort` SET `u5` = '/about' WHERE (`id` = '316');
/* 6.联系我们添加全国热线column*/
ALTER TABLE `sl_lianxiwomen` ADD COLUMN `quanguorexian` VARCHAR(1000) NOT NULL AFTER `youbian`;




