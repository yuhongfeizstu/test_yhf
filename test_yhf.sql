/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 100138
Source Host           : localhost:3316
Source Database       : test_yhf

Target Server Type    : MYSQL
Target Server Version : 100138
File Encoding         : 65001

Date: 2019-04-12 17:54:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_pass` varchar(255) DEFAULT NULL,
  `admin_phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'yuhongfei', '111', '15851111111');
INSERT INTO `tb_admin` VALUES ('2', 'yhfff', '111', '12345678912');
INSERT INTO `tb_admin` VALUES ('3', 'xxx', '123', '18745632156');
INSERT INTO `tb_admin` VALUES ('4', 'yx', '666', '15894632156');
INSERT INTO `tb_admin` VALUES ('5', 'adminxx', '444', '15857162272');
INSERT INTO `tb_admin` VALUES ('6', 'admin1', '1233', '15345612347');
INSERT INTO `tb_admin` VALUES ('7', 'ccc', '123', '15857134372');
INSERT INTO `tb_admin` VALUES ('8', 'xxxx', '444', '15857162272');
INSERT INTO `tb_admin` VALUES ('9', 'admin', '111', '15857162272');
INSERT INTO `tb_admin` VALUES ('10', 'hhh', '111', '15634568856');
INSERT INTO `tb_admin` VALUES ('11', 'kkk', '666', '15634789797');
INSERT INTO `tb_admin` VALUES ('12', 'admin3', '444', '15857162272');
