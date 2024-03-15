/*
 Navicat Premium Data Transfer

 Source Server         : msg
 Source Server Type    : MySQL
 Source Server Version : 80019 (8.0.19)
 Source Host           : localhost:3306
 Source Schema         : msg

 Target Server Type    : MySQL
 Target Server Version : 80019 (8.0.19)
 File Encoding         : 65001

 Date: 15/03/2024 21:18:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `intro` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent_id` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Original Novel', '包含该栏目及所有子栏目下内容', 0);
INSERT INTO `category` VALUES (2, 'Fan fiction', '', 0);
INSERT INTO `category` VALUES (3, 'Chat', '', 0);
INSERT INTO `category` VALUES (4, 'Admin', '', 0);

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply`  (
  `rid` int NOT NULL AUTO_INCREMENT,
  `tid` int NOT NULL DEFAULT 0,
  `floor` int UNSIGNED NOT NULL DEFAULT 0,
  `uid` int NOT NULL DEFAULT 0,
  `type` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reptime` int UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`rid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 82 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO `reply` VALUES (66, 54, 1, 7, 0, '匿名', '1', 1476089671);
INSERT INTO `reply` VALUES (34, 16, 1, 2, 1, '高贵红名', 'gdfgdfgdf', 1475078894);
INSERT INTO `reply` VALUES (65, 53, 1, 2, 1, '红名啊啊啊啊', 'aa<span class=\"quote\">&gt;&gt;52</span>', 1476089479);
INSERT INTO `reply` VALUES (36, 16, 3, 2, 1, '高贵红名', 'a', 1475367346);
INSERT INTO `reply` VALUES (51, 16, 4, 2, 1, '红名', 'aa', 1476077086);
INSERT INTO `reply` VALUES (52, 52, 1, 2, 1, '红名', 'teee', 1476077209);
INSERT INTO `reply` VALUES (53, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (54, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (55, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (56, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (57, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (58, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (59, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (60, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (61, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (62, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (63, 16, 5, 2, 1, '红名', 'a', 1476081164);
INSERT INTO `reply` VALUES (64, 52, 2, 7, 0, '匿名', '<span class=\"quote\">&gt;&gt;52</span>', 1476088745);
INSERT INTO `reply` VALUES (67, 53, 2, 7, 0, '匿名', 'a', 1476089685);
INSERT INTO `reply` VALUES (68, 52, 3, 7, 0, '匿名', '<span class=\"quote\">&gt;&gt;52&gt;2</span>', 1476089923);
INSERT INTO `reply` VALUES (69, 59, 1, 19, 0, '无名氏', '(;´Д`)嘿嘿嘿', 1710475317);
INSERT INTO `reply` VALUES (77, 63, 2, 19, 0, '无名氏', '回复测试啦啦啦', 1710504590);
INSERT INTO `reply` VALUES (75, 63, 1, 2, 1, '红名', '测试测试', 1710500477);
INSERT INTO `reply` VALUES (79, 63, 3, 19, 0, '无名氏', '111', 1710504795);
INSERT INTO `reply` VALUES (81, 65, 1, 19, 0, '无名氏', '试试看', 1710504996);

-- ----------------------------
-- Table structure for subscription
-- ----------------------------
DROP TABLE IF EXISTS `subscription`;
CREATE TABLE `subscription`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL DEFAULT 0,
  `tid` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 160 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of subscription
-- ----------------------------
INSERT INTO `subscription` VALUES (151, 2, 40);
INSERT INTO `subscription` VALUES (2, 2, 33);
INSERT INTO `subscription` VALUES (152, 1, 16);
INSERT INTO `subscription` VALUES (156, 2, 53);
INSERT INTO `subscription` VALUES (154, 2, 16);
INSERT INTO `subscription` VALUES (149, 1, 40);
INSERT INTO `subscription` VALUES (157, 19, 54);
INSERT INTO `subscription` VALUES (159, 19, 57);

-- ----------------------------
-- Table structure for thread
-- ----------------------------
DROP TABLE IF EXISTS `thread`;
CREATE TABLE `thread`  (
  `tid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL DEFAULT 0,
  `type` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `cat` int NOT NULL DEFAULT 0,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pubtime` int UNSIGNED NOT NULL DEFAULT 0,
  `lastreptime` int UNSIGNED NOT NULL DEFAULT 0,
  `SAGE` tinyint UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`tid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 68 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of thread
-- ----------------------------
INSERT INTO `thread` VALUES (42, 1, 0, 1, '匿名', '无标题', 'test', 1476022904, 1476022904, 0);
INSERT INTO `thread` VALUES (43, 2, 1, 1, '红名', '无标题', '1', 1476024038, 1476024038, 0);
INSERT INTO `thread` VALUES (39, 2, 1, 0, '红名', '举报受理', '在此串下举报违规串或回应，请简述举报理由。', 1475500819, 1475500819, 0);
INSERT INTO `thread` VALUES (40, 2, 1, 1, '红名', '无标题', '111', 1475502805, 1475502805, 1);
INSERT INTO `thread` VALUES (16, 2, 1, 3, '高贵红名', '无标题', 'fsdfsdfg', 1475078886, 1475500540, 0);
INSERT INTO `thread` VALUES (44, 2, 1, 2, '红名', '无标题', '111', 1476024161, 1476024161, 0);
INSERT INTO `thread` VALUES (67, 19, 0, 1, '无名氏', '试试看', '嘿嘿嘿', 1710504882, 1710504882, 0);
INSERT INTO `thread` VALUES (48, 2, 1, 1, '红名', '无标题', '1', 1476025999, 1476025999, 0);
INSERT INTO `thread` VALUES (49, 2, 1, 1, '红名', '无标题', 'dfasfd', 1476026161, 1476026161, 0);
INSERT INTO `thread` VALUES (52, 2, 1, 1, '红名', '无标题', 'a', 1476077177, 1476077209, 1);
INSERT INTO `thread` VALUES (53, 2, 1, 1, '红名啊啊啊啊', 'test', '111', 1476089449, 1476089685, 0);
INSERT INTO `thread` VALUES (54, 7, 0, 1, '匿名', 'a11', 'a11', 1476089645, 1476089671, 0);
INSERT INTO `thread` VALUES (61, 2, 1, 1, '红名', '无标题', '这是一个测试帖( ´ー`)', 1710499522, 1710499522, 0);
INSERT INTO `thread` VALUES (59, 19, 0, 4, '无名氏', '嘿嘿嘿', '我来啦我来啦(´ﾟДﾟ`)', 1710473232, 1710475317, 0);
INSERT INTO `thread` VALUES (63, 2, 1, 1, '红名', '测试标题', '( ´ー`)aaa', 1710499850, 1710504795, 0);
INSERT INTO `thread` VALUES (65, 2, 1, 1, '红名', '试试看', '嘿嘿', 1710500021, 1710504996, 0);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `uid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` tinyint NOT NULL DEFAULT 0,
  `username` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `nickname` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `regtime` int UNSIGNED NOT NULL DEFAULT 0,
  `regip` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `lastlogin` int UNSIGNED NOT NULL DEFAULT 0,
  `lastip` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 0, 'testa', '匿名', 'aa@aa.aa', '123456', 1474975269, '::1', 1476022900, '::1');
INSERT INTO `user` VALUES (2, 1, 'admin', '红名', 'admin@tm0.net', '5e953f36fcc8a11df056a6d924c2e689', 1474975269, '', 1710498725, '127.0.0.1');
INSERT INTO `user` VALUES (19, 0, 'yisar', '无名氏', '1533540012@qq.com', '5e953f36fcc8a11df056a6d924c2e689', 1710472818, '127.0.0.1', 1710504417, '127.0.0.1');

SET FOREIGN_KEY_CHECKS = 1;
