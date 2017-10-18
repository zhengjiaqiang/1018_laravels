/*
MySQL Database Backup Tools
Server:47.94.106.130:3306
Database:sealoan
Data:2017-10-17 14:50:00
*/
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `admin_name` varchar(20) DEFAULT NULL COMMENT '用户名',
  `admin_pwd` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `admin_lasttime` int(11) DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('1','qiang','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('2','chong','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('3','kang','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('4','jin','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('5','sai','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('6','hao','123','');
INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_pwd`,`admin_lasttime`) VALUES ('7','admin','123','');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` (`role_id`,`role_name`) VALUES ('1','学生');
INSERT INTO `role` (`role_id`,`role_name`) VALUES ('2','数据库管理者');

