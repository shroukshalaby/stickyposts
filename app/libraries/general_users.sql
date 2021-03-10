/*
 Navicat MySQL Data Transfer

 Source Server         : StickyPosts
 Source Server Type    : MySQL
 Source Server Version : 50649
 Source Host           : 198.12.247.19:3306
 Source Schema         : data20

 Target Server Type    : MySQL
 Target Server Version : 50649
 File Encoding         : 65001

 Date: 01/10/2020 16:58:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for general_users
-- ----------------------------
DROP TABLE IF EXISTS `general_users`;
CREATE TABLE `general_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ids` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `notification_token` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `register_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin` int(1) NULL DEFAULT NULL,
  `login_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `package` int(11) NULL DEFAULT NULL,
  `expiration_date` date NULL DEFAULT NULL,
  `expiration_date_autoactivity` date NULL DEFAULT NULL,
  `timezone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `permission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `activation_key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `reset_key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `history_ip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` int(1) NULL DEFAULT 1,
  `invited_by` int(11) NULL DEFAULT NULL,
  `sticky_last_login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `changed` datetime(0) NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `contract_id` int(11) NULL DEFAULT NULL,
  `frequency` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `package_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `leads` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `country` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `employee_num` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `industry` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `job_title` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `category` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `extra_package` int(11) NOT NULL DEFAULT 1,
  `trailer` int(11) NOT NULL DEFAULT 0,
  `analyzer_id` int(11) NULL DEFAULT NULL,
  `late_extra` int(11) NOT NULL DEFAULT 0,
  `extra_contract_id` int(11) NULL DEFAULT NULL,
  `language` int(11) NULL DEFAULT NULL,
  `free` int(11) NOT NULL DEFAULT 1,
  `promo_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `promo_code_autoactivity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_state` int(11) NOT NULL DEFAULT 0,
  `phone_auto` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `set_lang` int(11) NOT NULL,
  `register_from` int(11) NULL DEFAULT NULL COMMENT '1 => web, 2 => mobile',
  `selected_package` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `account_status` tinyint(1) NOT NULL DEFAULT 1,
  `source` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `assigned_employee` int(11) NOT NULL,
  `assigned_b2b_id` int(11) NOT NULL,
  `assigned_b2b_source` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activity_source` int(11) NOT NULL,
  `task_source` int(11) NOT NULL,
  `platform_source` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `landing_page` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `landing_category` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `affiliate_status` tinyint(1) NULL DEFAULT 0,
  `affiliate_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `affiliate_short_link` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `affiliate_last_login` datetime(0) NULL DEFAULT NULL,
  `affiliate_alarm_suspend` tinyint(1) NOT NULL DEFAULT 0,
  `affiliate_10_users_sent` tinyint(1) NOT NULL DEFAULT 0,
  `affiliate_50_users_sent` tinyint(1) NOT NULL DEFAULT 0,
  `affiliate_min_with_draw_sent` tinyint(1) NOT NULL DEFAULT 0,
  `account_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `affiliate_created_at` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `enterprise_account` tinyint(1) NOT NULL DEFAULT 0,
  `enterprise_package` int(11) NOT NULL,
  `enterprise_data` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `register_source` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2350 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
