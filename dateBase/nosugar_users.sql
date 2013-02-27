/*
Navicat MySQL Data Transfer

Source Server         : localHost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : nosugar

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-02-17 20:21:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `nosugar_users`
-- ----------------------------
DROP TABLE IF EXISTS `nosugar_users`;
CREATE TABLE `nosugar_users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) DEFAULT NULL,
  `user_pass` varchar(64) DEFAULT NULL,
  `user_nicename` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) DEFAULT NULL,
  `cookie_id` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nosugar_users
-- ----------------------------
INSERT INTO `nosugar_users` VALUES ('1', 'admin', 'xtmsMIYNh35M2', 'admin', 'ricardo.alba@hotmail.com', '2012-10-05 17:58:46', '1', '656619232');
INSERT INTO `nosugar_users` VALUES ('2', 'Mario', 'xt8Ws81Od5qpM', 'usuario', 'ricardo.alba@hotmail.com', '2012-10-07 10:32:09', '1', '');
INSERT INTO `nosugar_users` VALUES ('3', 'strtolower(Marios)', 'xt8Ws81Od5qpM', 'MARIO', 'ricardo.alba@hotmail.com', '2012-10-07 10:33:51', '1', '');
INSERT INTO `nosugar_users` VALUES ('4', 'marios', 'xt8Ws81Od5qpM', 'Marios', 'ricardo.alba@hotmail.com', '2012-10-07 10:35:27', '1', '');
INSERT INTO `nosugar_users` VALUES ('5', 'asda', 'xt8Ws81Od5qpM', 'sads', 'ricardo.alba@hotmail.com', '2012-10-07 12:13:57', '1', '');
INSERT INTO `nosugar_users` VALUES ('6', 'ytyutyugygiug', 'xt8Ws81Od5qpM', 'IUJIOJ', 'ricardo.alba@hotmail.com', '2012-10-07 12:14:22', '1', '');
INSERT INTO `nosugar_users` VALUES ('7', 'ricardo234', 'xt8Ws81Od5qpM', 'mario', 'ricardo.alba@hotmail.com', '2012-10-07 12:16:24', '1', '');
INSERT INTO `nosugar_users` VALUES ('8', 'asdasd', 'xt8Ws81Od5qpM', 'asas', 'dasdas@o.com', '2012-10-09 17:34:41', '1', '');
