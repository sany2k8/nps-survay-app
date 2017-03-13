/*
Navicat PGSQL Data Transfer

Source Server         : postgres
Source Server Version : 90408
Source Host           : localhost:5432
Source Database       : oz
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90408
File Encoding         : 65001

Date: 2017-03-13 16:12:45
*/


-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."tbl_user";
CREATE TABLE "public"."tbl_user" (
"id" int4 DEFAULT nextval('tbl_user_id_seq'::regclass) NOT NULL,
"username" text COLLATE "default" NOT NULL,
"password" text COLLATE "default",
"full_name" text COLLATE "default",
"email" text COLLATE "default",
"create_date" timestamptz(6),
"update_date" timestamptz(6),
"active" float4 DEFAULT 1 NOT NULL,
"avatar" text COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO "public"."tbl_user" VALUES ('1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'admin@oz.com', '2013-03-31 06:51:29+06', '2015-01-05 17:23:14+06', '1', '1420456994-admin.jpg');
INSERT INTO "public"."tbl_user" VALUES ('3', 'demo', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Demo User', null, '2013-04-22 04:55:07+06', '2013-05-30 15:49:05+06', '1', '1369907345-demo.png');
INSERT INTO "public"."tbl_user" VALUES ('4', 'lyotier', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'John Lyotier', 'john@lyotier.com', '2013-05-10 00:33:24+06', null, '1', null);
INSERT INTO "public"."tbl_user" VALUES ('5', 'cjensen', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Chris Jensen', 'chris@leftofthedot.com', '2013-05-11 01:41:50+06', '2013-05-11 01:52:55+06', '1', null);
INSERT INTO "public"."tbl_user" VALUES ('11', 'testuser', 'd033e22ae348aeb5660fc2140aec35850c4da997', null, null, '2013-05-16 10:51:44+06', null, '1', null);
INSERT INTO "public"."tbl_user" VALUES ('12', 'mike@leftofthedot.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Mike Simpson', 'mike@leftofthedot.com', '2013-10-12 03:59:48+06', null, '1', null);
INSERT INTO "public"."tbl_user" VALUES ('13', 'omar.sefian', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Omar Sefian', 'omar.sefian@gmail.com', '2013-11-04 03:13:12+06', null, '1', null);
INSERT INTO "public"."tbl_user" VALUES ('14', 'sany', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'sany ahmed', 'sany@w3engineers.com', '2015-02-02 10:46:03+06', '2015-02-02 10:46:03+06', '1', '1422852363-sany.jpg');
INSERT INTO "public"."tbl_user" VALUES ('15', 'mehedi', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '', '2015-02-02 10:59:32+06', '2015-02-02 10:59:32+06', '1', '1422853172-mehedi.jpg');
INSERT INTO "public"."tbl_user" VALUES ('16', 'kamal', '5cc5d8d4c7115f1c96c2983ec0d0f8a0f9dab596', '', '', '2017-03-12 23:06:35+06', '2017-03-12 23:06:35+06', '1', null);
INSERT INTO "public"."tbl_user" VALUES ('17', 'kamaly', '5cc5d8d4c7115f1c96c2983ec0d0f8a0f9dab596', '', '', '2017-03-12 23:08:36+06', '2017-03-12 23:08:36+06', '1', null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table tbl_user
-- ----------------------------
ALTER TABLE "public"."tbl_user" ADD PRIMARY KEY ("id");
