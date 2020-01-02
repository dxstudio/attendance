/*
Navicat MySQL Data Transfer

Source Server         : 112.74.41.209_3306
Source Server Version : 50621
Source Host           : 112.74.41.209:3306
Source Database       : attendance

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-06-17 20:42:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for administrator
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `identity` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lasttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES ('1', 'superadmin', 'superadmin', 'superadmin', '2017-06-06 18:32:26');
INSERT INTO `administrator` VALUES ('2', '纪检部部长', 'StudentUnion', 'e10adc3949ba59abbe56e057f20f883e', '2017-06-06 13:20:46');
INSERT INTO `administrator` VALUES ('3', '张某', 'counselor', 'e10adc3949ba59abbe56e057f20f883e', '2017-06-06 13:21:07');

-- ----------------------------
-- Table structure for classtotal
-- ----------------------------
DROP TABLE IF EXISTS `classtotal`;
CREATE TABLE `classtotal` (
  `facultyID` int(20) unsigned NOT NULL,
  `classID` int(20) unsigned NOT NULL,
  `classname` varchar(20) NOT NULL,
  `counsellor` varchar(20) NOT NULL,
  `week1` int(20) NOT NULL,
  `week2` int(4) NOT NULL,
  `week3` int(4) NOT NULL,
  `week4` int(4) NOT NULL,
  `week5` int(4) NOT NULL,
  `week6` int(4) NOT NULL,
  `week7` int(4) NOT NULL,
  `week8` int(4) NOT NULL,
  `week9` int(4) NOT NULL,
  `week10` int(4) NOT NULL,
  `week11` int(4) NOT NULL,
  `week12` int(4) NOT NULL,
  `week13` int(4) NOT NULL,
  `week14` int(4) NOT NULL,
  `week15` int(4) NOT NULL,
  `week16` int(4) NOT NULL,
  `week17` int(4) NOT NULL,
  `week18` int(4) NOT NULL,
  `week19` int(4) NOT NULL,
  `week20` int(4) NOT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classtotal
-- ----------------------------
INSERT INTO `classtotal` VALUES ('1501', '150101', '电气151', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150102', '电气152', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150103', '电气153', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150104', '电气154', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150105', '电气155', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150106', '电气156', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150107', '电气157', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150108', '电气158', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150109', '电气159', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150110', '电气1510', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150111', '电气1511', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1501', '150112', '教改自动化15', '张三', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150201', '电信151', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150202', '电信152', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150203', '电信153', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150204', '电信154', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150205', '电信155', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150206', '电信156', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150207', '电信157', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150208', '电信158', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150209', '电信159', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150210', '电信1510', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150211', '电信1511', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1502', '150212', '电信1512', '李四', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1503', '150301', '电子151', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1503', '150302', '电子152', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1503', '150303', '电子153', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1503', '150304', '电子154', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1504', '150401', '光信151', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `classtotal` VALUES ('1504', '150402', '光信152', '王五', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for studentrecord
-- ----------------------------
DROP TABLE IF EXISTS `studentrecord`;
CREATE TABLE `studentrecord` (
  `classID` int(20) unsigned NOT NULL,
  `classname` varchar(20) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `schoolID` varchar(50) NOT NULL,
  `creditID` char(50) NOT NULL,
  `record` text NOT NULL,
  `sex` varchar(4) NOT NULL,
  PRIMARY KEY (`schoolID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentrecord
-- ----------------------------
INSERT INTO `studentrecord` VALUES ('150101', '电气151', '周六', '205006050132', '6', '', '男');

SET FOREIGN_KEY_CHECKS=1;
