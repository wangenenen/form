/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2019-02-16 19:31:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_username` varchar(255) DEFAULT NULL,
  `news` varchar(255) DEFAULT NULL,
  `com_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', 'admin', 'gsfdgsddsodjgk', '2019-01-07 10:07:42', '2');
INSERT INTO `comment` VALUES ('2', 'admin', '的还是飞机i哦对警方随即i就打死', '2019-01-07 14:30:11', '2');
INSERT INTO `comment` VALUES ('3', 'admin', '啊手动阀手动阀', '2019-01-07 15:51:50', '1');
INSERT INTO `comment` VALUES ('4', 'admin', '分公司的管道施工', '2019-01-07 16:00:58', '1');
INSERT INTO `comment` VALUES ('5', 'admin', '第三方的', '2019-01-07 16:01:52', '4');
INSERT INTO `comment` VALUES ('6', 'admin', '大师傅犯得上', '2019-01-07 16:02:49', '3');
INSERT INTO `comment` VALUES ('7', 'admin', '实打实打算', '2019-01-07 16:12:50', '3');
INSERT INTO `comment` VALUES ('8', 'admin', '现在才', '2019-01-07 16:20:05', '14');
INSERT INTO `comment` VALUES ('9', 'admin', '让对方一股回家看了', '2019-01-07 16:36:23', '14');
INSERT INTO `comment` VALUES ('10', 'admin', '犯得上犯得上', '2019-01-07 16:24:22', '14');
INSERT INTO `comment` VALUES ('11', '', '大苏打撒旦', '2019-01-07 21:16:19', '3');
INSERT INTO `comment` VALUES ('12', '', '回国后', '2019-01-07 21:23:44', '1');
INSERT INTO `comment` VALUES ('13', 'admin', '大撒大撒', '2019-01-07 23:10:41', '1');
INSERT INTO `comment` VALUES ('14', 'admin', '实打实打算', '2019-01-07 23:16:28', '2');
INSERT INTO `comment` VALUES ('15', 'admin', '实打实打算', '2019-01-08 20:43:26', '11');
INSERT INTO `comment` VALUES ('16', '123', '实打实打算', '2019-01-08 22:43:12', '1');
INSERT INTO `comment` VALUES ('17', '123', '实打实打算', '2019-01-09 23:15:52', '17');
INSERT INTO `comment` VALUES ('18', 'admin', 'dfgdg', '2019-01-10 11:47:21', '4');
INSERT INTO `comment` VALUES ('19', 'admin', '我也好我也好', '2019-01-11 22:26:03', '22');
INSERT INTO `comment` VALUES ('20', 'qqqqqq', 'saasdas', '2019-01-11 22:41:25', '1');
INSERT INTO `comment` VALUES ('21', 'qqqqqq', '实打实打算', '2019-01-11 22:42:10', '23');
INSERT INTO `comment` VALUES ('22', '8520963', '撒打算dasdasdasdasdadasdas', '2019-01-11 23:01:14', '1');
INSERT INTO `comment` VALUES ('23', '8520963', '你好啊', '2019-01-11 23:01:48', '24');
INSERT INTO `comment` VALUES ('24', 'admin', '现在在', '2019-01-11 23:11:02', '1');

-- ----------------------------
-- Table structure for help
-- ----------------------------
DROP TABLE IF EXISTS `help`;
CREATE TABLE `help` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `he_titme` varchar(255) DEFAULT NULL,
  `he_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of help
-- ----------------------------
INSERT INTO `help` VALUES ('00000000001', '登录与注册', '2019-01-06 12:45:34');
INSERT INTO `help` VALUES ('00000000002', '密码注意事项', '2019-01-06 12:45:52');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `not_title` varchar(255) DEFAULT NULL,
  `not_content` varchar(2550) DEFAULT NULL,
  `not_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('1', 'admin', '用户相关规章条约', '用户使用本论坛时，不得利用用户个人信息设置，发表以下内容：\r\n\r\n1. 包含任何违反国家有关法律法规的内容。\r\n\r\n2. 带有恶意的、不文明的、易产生歧义与误解的字词符号。\r\n\r\n3. 使用高仿用户名、恶意模仿其他用户、组织或官方工作人员。\r\n\r\n4. 直接或间接地宣传一切涉及广告、商业性质的对象。\r\n\r\n5. 含有性相关或强烈性暗示、影响用户体验（超长头像头衔）的内容。', '2019-01-06 11:16:50');
INSERT INTO `notice` VALUES ('2', 'admin', '发帖相关规章条款', ' 1. 不得发表违规信息言论，包括（但不限于）政治、淫秽、色情、暴力、赌博、宗教、种族，一切言论必须遵循《互联网电子公告服务管理规定》及国家 其它有关法律法规，包括地方性及临时性法规。2. 不得发表无意义的垃圾内容，包括（但不限于）恶意灌水刷帖、无意义一句话主题、脸滚键盘回复、重复连帖。同时用户不应对垃圾内容进行回复或附议。\r\n3. 不得发表涉及广告宣传、商业性质的内容，包括（但不限于）帐号买卖、服务器贩卖或宣传、求购信息等的内容。', '2019-01-06 11:20:39');
INSERT INTO `notice` VALUES ('3', 'admin', '其它行为规范', '1. 友好礼貌尊重他人\r\n　　论坛里的每位用户都应当得到相同的尊重。如果你对别人的观点持不同意见，我们鼓励你参与讨论，与作者辩论，但是请不要采取漫骂诋毁等形式进行人身攻击。尊重他人的同时也是在尊重你自己。\r\n\r\n2. 正确归类帖子主题\r\n　　为了方便用户更好地找到自己所需的内容，论坛开启了帖子分类的功能。用户在发表主题时应正确归类帖子，根据主题的内容性质选择恰当的主题分类，若实在不清楚确切的分类可选择与内容最为接近的分类，并在有必要的情况下联系论坛管理团队做适当的迁移。', '2019-01-06 11:21:53');
INSERT INTO `notice` VALUES ('4', 'admin', '违规处罚策略', '1. 为了提供给用户一个相对更加开放的社区，本论坛将尽力降低管理强度，但这并不代表用户可以随意言论。如果用户不遵守本论坛的相关规章守则，那么处罚与封禁将不可避免。\r\n　　论坛对用户的处罚手段主要为“警告”与“封禁”两类。处罚的一般规则如下：\r\n若用户发表的内容违反了论坛规章守则，酌情对内容进行屏蔽或删除，并处以该用户一次警告处罚。\r\n若用户多次违规收到多次警告，则处以该用户一次临时封禁处罚。\r\n若用户仍持续多次违规收到警告、封禁处罚，则处以该用户永久封禁处罚。', '2019-01-06 11:22:47');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(765) DEFAULT NULL,
  `datatim` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'admin', '为什么现在有些男孩子只会刺客', '还有某些女孩子只会法师，上次一下子三个秒选法师。还打个鬼', '2019-01-05 17:55:33');
INSERT INTO `post` VALUES ('2', 'admin', '找个队友，找个队友，打单的队友，打陪打的队友', '不用多好的配合，我野王，来个中单或者射手，反正能C的动三个陪打猪就行，因为平时一带2往往会变成一带4太累了，所以找个队友', '2019-01-05 17:56:14');
INSERT INTO `post` VALUES ('3', '654321', '赛季末了有人能带黄小金升几段么，要结算钻石了', '赛季末了有人能带黄小金升几段么，要结算钻石了', '2019-01-05 17:59:07');
INSERT INTO `post` VALUES ('4', '654321', '《英雄联盟》段位再次变动', '据公告显示，Riot Games在青铜段位之下新增了“黑铁（Iron）”段位，而大师段位之上将新增“宗师（Grandmaster）”段位。以前作为调侃的“黑铁”如今真的到了现实中来。\r\n\r\n', '2019-01-05 18:02:13');
INSERT INTO `post` VALUES ('6', '65432', ' 为什么低端局那么多辅助选的石头人？', '除了大招毫无是处，难道牛头不比石头人厉害咩。印象中石头人辅助的排位，没赢过。死的比助攻多。唉，这游戏真的难玩。\r\n可以说是相当的无语。\r\n分担到辅助就好好打，不会选个软辅也好啊', '2019-01-06 10:22:43');
INSERT INTO `post` VALUES ('7', '123456', '新版无限火力又来了', '新版无限火力又来了，你们准备好了么！', '2019-01-06 10:23:55');
INSERT INTO `post` VALUES ('8', 'admin', '[交流] 新手玩英雄联盟推荐在哪个区？', '推荐艾欧尼亚比较好上手', '2019-01-06 10:25:03');
INSERT INTO `post` VALUES ('9', '604730783', '[攻略] 王者荣耀曹操半肉输出装推荐', '王者荣耀曹操有位移，还是多段位移，有消耗技能，甚至还有解控技能，曹操一般都是走上路的，给大家推荐一套曹操的半肉出装，让曹操在上单不仅抗压伤害也很高哦。下面就给大家推荐一下曹操半肉出装和五级铭文。', '2019-01-06 10:27:26');
INSERT INTO `post` VALUES ('10', '65432', '[攻略] S14赛季将会调整16件装备', '[攻略] S14赛季将会调整16件装备，破晓性价比降低，圣杯可以回血！', '2019-01-06 10:28:24');
INSERT INTO `post` VALUES ('11', '987654', '[攻略] 现版本最强阵容出炉', '结合了冬冠杯的胜率榜和BP榜的一些数据，整理出现版本最强的阵容组合，希望能让大家从职业选手的选位上找到合适的赛季末冲分英雄，早日冲上理想的段位。', '2019-01-06 10:32:12');
INSERT INTO `post` VALUES ('12', 'admin', '[交流] LOL厄加特都可以打什么位置？', '厄加特，除了上单，还可以打哪个位置。辅助可以吗？我就是想除了上单，玩玩别的位置。就想大招偷人头', '2019-01-06 10:32:53');
INSERT INTO `post` VALUES ('13', '604730783', 'LOL各分段玩家比例：一入青铜深似海', '随着IG夺得S8冠军，LOL的热度无疑又达到了一个高峰，而因此加入游戏或是回归游戏的玩家也明显增多。那么在这么多玩家当中，究竟哪个分段的玩家最多、哪个分段的玩家最少呢？相信许多人都还不知道这个答案，而最近就有一份大数据将各分段玩家所占比例标示了出来。　其实白银段位的玩家是最多，所占比例高达42.22%，看来以前传言白银里面卧虎藏龙，甚至能够吊打钻石玩家，果然所言不虚。而其中最少的还是王者分段的玩家，以前哪里似乎都能够听到某个人吹嘘自己是王者，看来都是些嘴强王者，果然能够上王者段位的玩家都是不容易的。', '2019-01-06 10:34:14');
INSERT INTO `post` VALUES ('14', '654321', '不要被国服带躺上分欺骗了', '曾经打游戏认识一个妹子，我送她各种皮肤，带她上王者。后来可能她良心发现，告诉我说她其实是个男的，觉得我人挺不错的，要见面当兄弟。见面时却是个美女，我问她为什么骗我，她只是笑笑不说话。然后我们相爱了，结婚的时候我才发现，他当初并没有骗我。', '2019-01-06 10:35:04');
INSERT INTO `post` VALUES ('15', 'admin', '[交流] 新手该如何脱坑 ', '\r\n青铜打不过？我以前玩过LOL白银段位了  来玩这个王者荣耀发现真难，找个小哥哥带我飞', '2019-01-06 10:35:56');
INSERT INTO `post` VALUES ('17', 'admin', '士大夫大师傅', '发的大师傅大师傅但是', '2019-01-07 17:21:26');
INSERT INTO `post` VALUES ('18', 'admin', '现场v现场', '现场v虚心v现场v现场', '2019-01-07 23:28:50');
INSERT INTO `post` VALUES ('19', 'admin', '反倒是f', 'dfdfd', '2019-01-08 11:47:08');
INSERT INTO `post` VALUES ('20', 'admin', '士大夫大师傅', '会尽快回家会考虑后不久·1谈风月谷hi健康老人他已经OK', '2019-01-08 22:22:34');
INSERT INTO `post` VALUES ('21', 'admin', 'feff', 'sdfsdfsfsfsdfsd', '2019-01-11 17:23:24');
INSERT INTO `post` VALUES ('22', 'admin', '你好啊', '你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊你好啊', '2019-01-11 22:25:46');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `qq` int(15) DEFAULT NULL,
  `user_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '654321', '8520', '642545', 'sdf@sd', '55', '8888', '2019-01-07 21:48:53');
INSERT INTO `users` VALUES ('4', '987654', '987654', '987654', '987654@qq', null, null, '2019-01-07 21:48:53');
INSERT INTO `users` VALUES ('5', 'admin', 'admin', 'admin', 'hgfkjhj@vdsf.d', '545478878', '454564561', '2019-01-12 09:15:10');
INSERT INTO `users` VALUES ('6', '604730783', '8520', '604730783', 'dsf@cscds', '165454156', '789878978', '2019-01-07 21:48:53');
INSERT INTO `users` VALUES ('8', '87654', '87654', '87654', '87654@77', null, null, '2019-01-10 15:12:56');
INSERT INTO `users` VALUES ('9', '76543', '76543', '76543', '6543@ry', null, null, '2019-01-10 15:13:28');
INSERT INTO `users` VALUES ('10', '7410', '7410', '7410', '7897@qq', null, null, '2019-01-10 15:14:03');
INSERT INTO `users` VALUES ('11', 'egrsdggsd', '96321', 'sdgsd', 'dfsdf@sds', null, null, '2019-01-10 16:49:23');
INSERT INTO `users` VALUES ('12', '9874', '98741', '98741', 'fdsfds@s', null, null, '2019-01-10 16:52:06');
INSERT INTO `users` VALUES ('13', '12396', '321', '321', 'ffd@s', null, null, '2019-01-11 08:39:53');
INSERT INTO `users` VALUES ('14', '987412', '987412', '987412', '123@q', null, null, '2019-01-11 08:42:27');
INSERT INTO `users` VALUES ('15', '2589', '2589', '2589', 'sds@a', null, null, '2019-01-11 08:43:58');
INSERT INTO `users` VALUES ('16', '123852', '8547698', '8547', 'sada@qq', null, null, '2019-01-11 09:03:25');
INSERT INTO `users` VALUES ('17', '852963', '9638', '56565', 'ds@sd', null, null, '2019-01-11 09:29:22');
INSERT INTO `users` VALUES ('18', '8687575', '98', 'jjghjg', '78@d.ddd', null, null, '2019-01-11 09:51:21');
INSERT INTO `users` VALUES ('19', '888888', '888888', '888888', 'hjhj@hj.huh', null, null, '2019-01-11 17:22:43');
