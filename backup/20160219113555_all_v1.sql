--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: localhost
-- 生成日期: 2016 年  02 月 19 日 11:35
-- MySQL版本: 5.5.47
-- PHP 版本: 5.5.30

--
-- 数据库: `shanghu`
--

-- -------------------------------------------------------

--
-- 表的结构lk_admin
--

DROP TABLE IF EXISTS `lk_admin`;
CREATE TABLE `lk_admin` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` varchar(40) NOT NULL,
  `adminpass` char(80) NOT NULL,
  `lasttime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 lk_admin
--

INSERT INTO `lk_admin` VALUES('1','yangzie','113448f31be95cf50dc71579d104bc5b','2016-02-17 11:46:04');
--
-- 表的结构lk_shanghu
--

DROP TABLE IF EXISTS `lk_shanghu`;
CREATE TABLE `lk_shanghu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shName` varchar(60) NOT NULL,
  `belongSh` mediumint(8) NOT NULL,
  `isMoney` char(1) NOT NULL,
  `isVip` char(1) NOT NULL,
  `addTime` datetime NOT NULL,
  `updateTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 lk_shanghu
--

INSERT INTO `lk_shanghu` VALUES('1','福建通达股份有限公司','1','1','0','2016-03-01 09:19:57','2016-02-18 13:02:24');
INSERT INTO `lk_shanghu` VALUES('2','福建非凡科技有限公司','1','0','0','2016-02-22 09:21:52','2016-02-02 09:21:56');
INSERT INTO `lk_shanghu` VALUES('14','黑龙江点点达','12','0','0','2016-02-18 13:02:21','2016-02-18 13:02:21');
INSERT INTO `lk_shanghu` VALUES('15','福建大大泡泡�\�','1','1','1','2016-02-18 13:02:06','2016-02-18 13:02:06');
INSERT INTO `lk_shanghu` VALUES('5','浙江汇聚控股金融管理有限公司','3','1','0','2016-02-18 10:02:41','2016-02-18 10:02:41');
INSERT INTO `lk_shanghu` VALUES('6','浙江哇哈哈食�\�','3','0','0','2016-02-18 10:02:15','2016-02-18 10:02:15');
INSERT INTO `lk_shanghu` VALUES('7','浙江大大泡泡�\�','3','1','1','2016-02-18 10:02:24','2016-02-18 10:02:24');
INSERT INTO `lk_shanghu` VALUES('9','福建哟哟哟公�\�','1','1','1','2016-02-18 10:02:21','2016-02-18 10:02:21');
--
-- 表的结构lk_shanghui
--

DROP TABLE IF EXISTS `lk_shanghui`;
CREATE TABLE `lk_shanghui` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shName` varchar(60) NOT NULL,
  `masterName` varchar(60) NOT NULL,
  `masterPhone` char(11) DEFAULT NULL,
  `masterWechat` varchar(26) DEFAULT NULL,
  `masterQQ` char(13) DEFAULT NULL,
  `bankAccount` char(30) DEFAULT NULL,
  `shCount` mediumint(8) NOT NULL,
  `addTime` datetime NOT NULL,
  `updateTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 lk_shanghui
--

INSERT INTO `lk_shanghui` VALUES('1','莆田商会2','张庆�\�','15968754455','15968754455','119547855','99765453434323233','0','2016-02-17 18:18:10','2016-02-19 11:02:36');
INSERT INTO `lk_shanghui` VALUES('2','江苏商会陕西分会','李大�\�','15835985635','yht321','','','0','2016-02-16 18:19:04','2016-02-15 18:19:10');
INSERT INTO `lk_shanghui` VALUES('3','浙江商会','马云','13888888888','mayun888','','','0','2016-02-09 18:20:01','2016-02-16 18:20:06');
INSERT INTO `lk_shanghui` VALUES('5','江西商会','王一�\�','13629778899','ygw1294','1195745885','6655','0','2016-02-17 20:02:54','2016-02-17 20:02:54');
INSERT INTO `lk_shanghui` VALUES('14','大庆商会','李群','15432123454','','','','0','2016-02-19 09:02:14','2016-02-19 09:02:14');
INSERT INTO `lk_shanghui` VALUES('12','大庆商会','习近�\�','15845325555','ygq655','11924443333','','0','2016-02-17 22:02:01','2016-02-17 22:02:01');
