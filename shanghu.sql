/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : shanghu

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-02-23 23:18:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lk_admin
-- ----------------------------
DROP TABLE IF EXISTS `lk_admin`;
CREATE TABLE `lk_admin` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` varchar(40) NOT NULL,
  `adminpass` char(80) NOT NULL,
  `lasttime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lk_admin
-- ----------------------------
INSERT INTO `lk_admin` VALUES ('1', 'yangzie', '113448f31be95cf50dc71579d104bc5b', '2016-02-17 11:46:04');

-- ----------------------------
-- Table structure for lk_shanghu
-- ----------------------------
DROP TABLE IF EXISTS `lk_shanghu`;
CREATE TABLE `lk_shanghu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shName` varchar(60) NOT NULL,
  `belongSh` mediumint(8) NOT NULL,
  `masterName` varchar(255) NOT NULL,
  `masterPhone` varchar(255) NOT NULL,
  `masterQQ` char(255) DEFAULT NULL,
  `masterWechat` varchar(255) DEFAULT NULL,
  `masterEmail` varchar(255) DEFAULT NULL,
  `isMoney` char(1) NOT NULL,
  `isVip` char(1) NOT NULL,
  `addTime` datetime NOT NULL,
  `updateTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lk_shanghu
-- ----------------------------
INSERT INTO `lk_shanghu` VALUES ('1', '福建通达股份有限公司', '1', '马三炮', '123456789', '987654321', 'tf000', 'yangzie110@qq.com', '1', '1', '2016-03-01 09:19:57', '2016-02-23 22:02:49');
INSERT INTO `lk_shanghu` VALUES ('2', '福建非凡科技有限公司', '1', '周润发', '12568974587', '252568578', '435665433', 'yhhg@163.com', '0', '0', '2016-02-22 09:21:52', '2016-02-02 09:21:56');
INSERT INTO `lk_shanghu` VALUES ('14', '黑龙江点点达', '12', '习近平', '1366952211', '445522', 'ygw1294', 'yangzie110@qq.com', '0', '0', '2016-02-18 13:02:21', '2016-02-23 23:02:00');
INSERT INTO `lk_shanghu` VALUES ('15', '福建大大泡泡糖', '1', '', '', null, null, null, '1', '1', '2016-02-18 13:02:06', '2016-02-18 13:02:06');
INSERT INTO `lk_shanghu` VALUES ('5', '浙江汇聚控股金融管理有限公司', '3', '', '', null, null, null, '1', '0', '2016-02-18 10:02:41', '2016-02-18 10:02:41');
INSERT INTO `lk_shanghu` VALUES ('6', '浙江哇哈哈食品', '3', '', '', null, null, null, '0', '0', '2016-02-18 10:02:15', '2016-02-18 10:02:15');
INSERT INTO `lk_shanghu` VALUES ('7', '浙江大大泡泡糖', '3', '', '', null, null, null, '1', '1', '2016-02-18 10:02:24', '2016-02-18 10:02:24');
INSERT INTO `lk_shanghu` VALUES ('9', '福建哟哟哟公司', '1', '', '', null, null, null, '1', '1', '2016-02-18 10:02:21', '2016-02-18 10:02:21');
INSERT INTO `lk_shanghu` VALUES ('21', '江西点点达', '2', '', '', null, null, null, '1', '0', '2016-02-23 20:02:14', '2016-02-23 20:02:25');
INSERT INTO `lk_shanghu` VALUES ('22', '江西点点达', '5', '李群', '13965897898', '119547854', 'uuutt', 'tttttt@qq.com', '1', '1', '2016-02-23 20:02:52', '2016-02-23 23:02:29');
INSERT INTO `lk_shanghu` VALUES ('24', '浙江点点达', '3', '王自健', '13999999999', '555555', 'yuqqqq', 'yangzie@qq.com', '1', '0', '2016-02-23 21:02:00', '2016-02-23 21:02:00');
INSERT INTO `lk_shanghu` VALUES ('25', '江西大拇指科技有限公司', '5', '李大嘴', '13666666666', '', '', 'yangzi788@qq.com', '0', '0', '2016-02-23 21:02:19', '2016-02-23 21:02:19');

-- ----------------------------
-- Table structure for lk_shanghui
-- ----------------------------
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

-- ----------------------------
-- Records of lk_shanghui
-- ----------------------------
INSERT INTO `lk_shanghui` VALUES ('1', '福建莆田商会', '张庆銮', '15968754455', '15968754455', '119547855', '99765453434323233', '0', '2016-02-17 18:18:10', '2016-02-23 20:02:23');
INSERT INTO `lk_shanghui` VALUES ('2', '江苏商会陕西分会', '李大嘴', '15835985635', 'yht321', null, null, '0', '2016-02-16 18:19:04', '2016-02-15 18:19:10');
INSERT INTO `lk_shanghui` VALUES ('3', '浙江商会', '马云', '13888888888', 'mayun888', null, null, '0', '2016-02-09 18:20:01', '2016-02-16 18:20:06');
INSERT INTO `lk_shanghui` VALUES ('5', '江西商会', '王一帆', '13629778899', 'ygw1294', '1195745885', '6655', '0', '2016-02-17 20:02:54', '2016-02-17 20:02:54');
INSERT INTO `lk_shanghui` VALUES ('12', '大庆商会', '习近平', '15845325555', 'ygq655', '11924443333', '', '0', '2016-02-17 22:02:01', '2016-02-17 22:02:01');

-- ----------------------------
-- Table structure for lk_shangping
-- ----------------------------
DROP TABLE IF EXISTS `lk_shangping`;
CREATE TABLE `lk_shangping` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shangName` varchar(255) NOT NULL,
  `isShanghu` mediumint(8) NOT NULL,
  `shangPrice` decimal(10,2) NOT NULL,
  `shangBase` varchar(255) NOT NULL,
  `ShangOne` varchar(255) NOT NULL,
  `ShangTwo` varchar(255) NOT NULL,
  `shangThree` varchar(255) NOT NULL,
  `addTime` datetime NOT NULL,
  `updateTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lk_shangping
-- ----------------------------
INSERT INTO `lk_shangping` VALUES ('1', 'Apple iPhone 6s (A1700) 16G 金色 移动100', '1', '4800.40', '30', '25', '19', '15', '2016-02-09 17:42:24', '2016-02-23 20:02:28');
INSERT INTO `lk_shangping` VALUES ('2', '老A（LAOA) 折叠手推车 静音平板车 微静音承重300斤100', '1', '388.00', '20', '15', '10', '5', '2016-02-02 17:43:31', '2016-02-23 20:02:53');
INSERT INTO `lk_shangping` VALUES ('3', '秋鹿情侣睡衣纯棉卡通男女翻领休闲长袖家居服222', '1', '900.00', '10', '10', '10', '10', '2016-03-23 17:45:42', '2016-02-23 20:02:51');
INSERT INTO `lk_shangping` VALUES ('4', 'SYMA司马航模X9遥控飞车 四轴飞行器耐摔遥控飞机', '2', '555.00', '25', '10', '5', '3', '2016-02-09 17:47:14', '2016-02-02 17:47:17');
INSERT INTO `lk_shangping` VALUES ('5', '德国 进口牛奶 欧德堡（Oldenburger）超高温处理全脂纯', '2', '52.00', '10', '8', '3', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `lk_shangping` VALUES ('7', ' 女士棉氨弹力透气低腰包臀三角内裤', '2', '65.00', '10', '2', '2', '10', '2016-02-23 19:02:39', '2016-02-23 20:02:28');
INSERT INTO `lk_shangping` VALUES ('8', ' 女士棉氨弹力透气低腰包臀三角内裤', '2', '65.00', '10', '2', '2', '2', '2016-02-23 19:02:14', '2016-02-23 19:02:14');
INSERT INTO `lk_shangping` VALUES ('9', '香奈儿（Chanel） 邂逅清新淡香水 3*20ml', '1', '799.00', '50', '1', '1', '1', '2016-02-23 19:02:26', '2016-02-23 19:02:26');
INSERT INTO `lk_shangping` VALUES ('10', '瑰珀翠/瑰柏翠 品牌旗舰店 满百减十 洗发沐浴者哩', '21', '172.00', '40', '30', '20', '10', '2016-02-23 20:02:29', '2016-02-23 20:02:29');
INSERT INTO `lk_shangping` VALUES ('11', ' 小天鹅（Little Swan）TG70-J60WDX 7公斤智能变频滚筒洗衣机 白色 京东微联APP控制小天鹅（Little', '21', '3698.90', '51', '41', '31', '21', '2016-02-23 20:02:00', '2016-02-23 20:02:27');
INSERT INTO `lk_shangping` VALUES ('12', '恒源祥男士内裤 兰精粘纤中腰印花平角裤 U凸款裤头礼盒装 A组合 ', '22', '68.00', '50', '30', '20', '11', '2016-02-23 20:02:42', '2016-02-23 21:02:12');
