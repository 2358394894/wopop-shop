-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 11 月 21 日 11:10
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wopop`
--
CREATE DATABASE `wopop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wopop`;

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `did` int(11) NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `duid` int(11) NOT NULL COMMENT '用户id',
  `dname` varchar(50) NOT NULL COMMENT '收货人姓名',
  `dphone` varchar(50) NOT NULL COMMENT '收货人手机号',
  `daddress` varchar(255) NOT NULL COMMENT '收货人地址',
  `zipcode` int(6) NOT NULL COMMENT '邮编',
  PRIMARY KEY (`did`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户地址表' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`did`, `duid`, `dname`, `dphone`, `daddress`, `zipcode`) VALUES
(1, 2, '测试', '123456', '广东省阳江市', 529536),
(2, 2, '小明', '66666888', '广东省广州市白云区同和街道5街25号', 123456),
(7, 2, 'ceshi', '13', '123', 123),
(8, 2, 'q', '0', 'qq', 0),
(9, 2, 'ccc', '22222', 'cc', 123),
(10, 2, 'sdasdasd', '0', 'aaasd', 0),
(11, 2, 'q', '0', 'qq', 0),
(12, 2, '123444', '123444', '123444', 123444),
(14, 2, '阿萨大苏打', '123444', '啊啊啊', 123),
(15, 3, '林琳', '2147483647', '广东省广州市黄埔区联和街道139号', 50000),
(17, 3, '黄敏', '2147483647', '广东省广州市天河区南华工商职业学院', 526896);

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(50) NOT NULL COMMENT '用户名',
  `apwd` varchar(50) NOT NULL COMMENT '密码',
  `alevel` int(11) NOT NULL COMMENT '管理员权限等级',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`aid`, `aname`, `apwd`, `alevel`) VALUES
(1, 'abc', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Angela', '123', 2),
(7, 'Cheney(000000)', '670b14728ad9902aecba32e22fa4f6bd', 1);

-- --------------------------------------------------------

--
-- 表的结构 `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `bid` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告图ID',
  `bpic` varchar(255) NOT NULL COMMENT '图片路径',
  `burl` varchar(255) NOT NULL COMMENT '点击图片跳转路径',
  `border` int(11) NOT NULL COMMENT '图片排列顺序',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='广告图表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`bid`, `bpic`, `burl`, `border`) VALUES
(1, '/uploads/20181017\\ee2abc91c35050afc0e41c3227dc1c8a.jpg', 'www.ceshi.com', 1),
(2, '/uploads/20181017\\fc2e3997ac2a036d52a6ed1bfc62fb78.jpg', 'www.xiugai.com', 2),
(3, '/uploads/20181017\\3e60a450fce338bf779eb6fb7cc2d12e.jpg', 'www.baidu.com', 3);

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '购物项ID',
  `cpid` int(11) NOT NULL COMMENT '产品ID',
  `cnum` int(11) NOT NULL COMMENT '产品数量',
  `cuid` int(11) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='购物车表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '品牌ID',
  `cname` varchar(255) NOT NULL COMMENT '品牌名称',
  `cmouse` int(12) DEFAULT NULL COMMENT '鼠标模块',
  `ckeyboard` int(12) DEFAULT NULL COMMENT '键盘模块',
  `cheadset` int(12) DEFAULT NULL COMMENT '耳机模块',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='品牌表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `cmouse`, `ckeyboard`, `cheadset`) VALUES
(1, 'CHERRY', NULL, 1, NULL),
(2, 'FILCO', NULL, 1, NULL),
(3, 'VARMILO', NULL, 1, NULL),
(4, 'logitech', 1, 1, NULL),
(5, 'SENNHEISER', NULL, NULL, 1),
(6, 'SONY', NULL, NULL, 1),
(7, 'audio-technica', NULL, NULL, 1),
(8, 'Beats', NULL, NULL, 1),
(9, '小米', 1, 1, 1),
(10, '雷柏', 1, 1, NULL),
(11, '双飞燕', 1, 1, NULL),
(12, '联想', 1, 1, NULL),
(13, '雷蛇', 1, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `mname` varchar(50) NOT NULL COMMENT '昵称',
  `mtitle` varchar(255) NOT NULL COMMENT '主题',
  `mcontent` text NOT NULL COMMENT '留言内容',
  `mdate` date NOT NULL COMMENT '留言日期',
  `mreply` text COMMENT '回复',
  `mrepdate` date DEFAULT NULL COMMENT '回复日期',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='在线留言/留言板' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `ntitle` varchar(255) NOT NULL COMMENT '新闻标题',
  `ncontent` text NOT NULL COMMENT '新闻内容',
  `ndate` datetime NOT NULL COMMENT '新闻发布日期',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `nhit` int(11) DEFAULT NULL COMMENT '新闻点击数',
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`nid`, `ntitle`, `ncontent`, `ndate`, `author`, `nhit`) VALUES
(1, '新闻测试', '新闻发布123456', '2018-09-15 16:00:00', '小明', NULL),
(2, 'iphone xs的最新相关消息', 'iPhone XS。采用全面屏设计，配备两种尺寸的超视网膜显示屏，更拥有原深感摄像头、面容 ID、双镜头系统，以及 A12 仿生这款强大的芯片。', '2018-09-15 16:16:12', '佚名', NULL),
(3, '修改新闻测试', '404', '2018-09-18 14:46:58', 'chen', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `nmessage`
--

CREATE TABLE IF NOT EXISTS `nmessage` (
  `nmid` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻评论id',
  `nmname` varchar(50) NOT NULL COMMENT '用户名',
  `nmcontent` text NOT NULL COMMENT '评论内容',
  `nmdate` date NOT NULL COMMENT '评论日期',
  `nmreply` text COMMENT '回复内容',
  `nmrepdate` date DEFAULT NULL COMMENT '回复日期',
  `nmnid` int(11) NOT NULL COMMENT '新闻id',
  PRIMARY KEY (`nmid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻评论表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `nmessage`
--

INSERT INTO `nmessage` (`nmid`, `nmname`, `nmcontent`, `nmdate`, `nmreply`, `nmrepdate`, `nmnid`) VALUES
(1, 'abc', '一般般吧...', '2018-06-12', NULL, NULL, 0),
(2, 'abc', '真的感觉不是那么好看，好看在哪里', '2018-06-12', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oitems`
--

CREATE TABLE IF NOT EXISTS `oitems` (
  `oiid` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单项ID',
  `oid` int(11) NOT NULL COMMENT '订单ID',
  `opid` int(11) NOT NULL COMMENT '产品ID',
  `onum` int(11) NOT NULL COMMENT '购买数量',
  `opprice` decimal(12,2) NOT NULL COMMENT '产品价格(单价)',
  `ototal` decimal(12,2) NOT NULL COMMENT '小结(结算)',
  `oiuid` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`oiid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='订单项表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `oitems`
--

INSERT INTO `oitems` (`oiid`, `oid`, `opid`, `onum`, `opprice`, `ototal`, `oiuid`) VALUES
(1, 3, 15, 2, '2268.00', '4536.00', 3),
(2, 4, 21, 5, '249.00', '1245.00', 2),
(3, 5, 20, 6, '979.00', '5874.00', 2);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `oname` varchar(100) NOT NULL COMMENT '姓名(客户信息)',
  `oaddress` varchar(255) NOT NULL COMMENT '地址(客户信息)',
  `ophone` varchar(11) NOT NULL COMMENT '手机号(客户信息)',
  `odate` datetime NOT NULL COMMENT '下单日期',
  `ostate` int(11) NOT NULL COMMENT '订单状态',
  `ouid` int(11) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='订单表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`oid`, `oname`, `oaddress`, `ophone`, `odate`, `ostate`, `ouid`) VALUES
(3, '林琳', '广东省广州市黄埔区联和街道139号', '2147483647', '2018-11-15 22:53:07', 3, 3),
(4, 'lijck', '广东省江门市开平市', '13245678910', '2018-11-15 23:01:36', 3, 2),
(5, '修改订单', '测试测试', '12345676666', '2018-11-15 23:01:49', 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `pmessage`
--

CREATE TABLE IF NOT EXISTS `pmessage` (
  `pmid` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `pmname` varchar(50) NOT NULL COMMENT '用户昵称',
  `pmcontent` text NOT NULL COMMENT '评论内容',
  `pmdate` datetime NOT NULL COMMENT '评论时间',
  `pmpid` int(11) NOT NULL COMMENT '商品ID',
  PRIMARY KEY (`pmid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID',
  `pname` varchar(255) NOT NULL COMMENT '产品名称',
  `pprice` decimal(11,2) NOT NULL COMMENT '产品价格',
  `pcid` int(11) NOT NULL COMMENT '品牌ID',
  `pcontent` text NOT NULL COMMENT '产品介绍',
  `ppic` varchar(255) NOT NULL COMMENT '产品图片',
  `pdate` datetime NOT NULL COMMENT '发布日期',
  `ptype` int(11) NOT NULL COMMENT '产品分类',
  `state` int(11) DEFAULT NULL COMMENT '上架状态',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品/商品表' AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pcid`, `pcontent`, `ppic`, `pdate`, `ptype`, `state`) VALUES
(1, 'cherry樱桃-085-键盘', '399.00', 1, 'cherry樱桃-085-键盘，德国原装樱桃轴', '/uploads/20181117\\cd0411dd6101d594e6e65d67db82ac84.jpg', '2018-09-11 17:13:17', 2, 1),
(2, '森海塞尔（sennheiser）momentumfreein-earwireless蓝牙耳机', '1499.00', 5, '森海塞尔（sennheiser）momentumfreein-earwireless蓝牙耳机，原装正品，源自德国', '/uploads/20180911\\9088bce928b0074a4d49e006f2fb5069.jpg', '2018-09-11 17:19:50', 3, 1),
(3, '罗技（logitech）G502游戏鼠标', '389.00', 4, '罗技（logitech）G502有线家用笔记本电脑守望先LOL/CF/DOTA 绝地求生FPS USB光电电竞鼠标', '/uploads/20180911\\48dd74e318c60728a87bab74add61660.jpg', '2018-09-11 17:28:59', 1, 1),
(4, '小米鼠标', '99.00', 9, '测试', '/uploads/20180911\\d50d4fa26fca5e402e367d19108e5576.jpg', '2018-09-11 17:29:56', 1, 1),
(5, '罗技（G）G403 游戏鼠标', '349.00', 4, '罗技（G）G403 游戏鼠标 RGB鼠标 吃鸡鼠标 绝地求生 12000DPI FPS鼠标 压枪怪', '/uploads/20181028\\ed9fa6eeccd1e681ed385fa2f4cfc11d.jpg', '2018-10-28 12:17:27', 1, 1),
(6, '雷蛇（Razer）曼巴眼镜蛇精英版 黑色 有线电竞游戏鼠标 绝地求生鼠标 吃鸡鼠标', '399.00', 13, '雷蛇（Razer）曼巴眼镜蛇精英版 黑色 有线电竞游戏鼠标 绝地求生鼠标 吃鸡鼠标', '/uploads/20181028\\ef768120996ce904b95ff628867bfc94.jpg', '2018-10-28 12:18:35', 1, 1),
(7, '雷蛇（Razer）锐蝮蛇竞技版 韦神同款游戏鼠标 有线电竞游戏鼠标 绝地求生鼠标 吃鸡鼠标', '429.00', 13, '雷蛇（Razer）锐蝮蛇竞技版 韦神同款游戏鼠标 有线电竞游戏鼠标 绝地求生鼠标 吃鸡鼠标', '/uploads/20181028\\952ac69295acd2a1c6845d97e7ab0224.jpg', '2018-10-28 12:21:10', 1, 1),
(8, '雷蛇（Razer）猎魂光蛛-光轴 电竞游戏机械键盘 幻彩背光', '899.00', 13, '雷蛇（Razer）猎魂光蛛-光轴 电竞游戏机械键盘 幻彩背光', '/uploads/20181028\\7c707eddb045eb7a651aa5c6943db2b5.jpg', '2018-10-28 12:29:40', 2, 1),
(9, '樱桃（CHERRY）MX Board 8.0 G80-3888HYAEU-2 RGB 背光游戏机械键盘', '1799.00', 1, '樱桃（CHERRY）MX Board 8.0 G80-3888HYAEU-2 RGB 背光游戏机械键盘 黑色红轴 绝地求生 吃鸡键盘', '/uploads/20181028\\38127d38ded6733d4df944c5bc902f48.jpg', '2018-10-28 12:31:14', 2, 1),
(10, '罗技（G）G610', '529.00', 4, '罗技（G）G610 Cherry轴全尺寸背光机械游戏键盘 机械键盘 红轴 吃鸡键盘 绝地求生', '/uploads/20181028\\387c32435c9f8c1a55c43a5e0a13e699.jpg', '2018-10-28 12:32:33', 2, 1),
(11, '雷蛇（Razer）猎魂光蛛精英版-光轴', '1299.00', 13, '雷蛇（Razer）猎魂光蛛精英版-光轴 电竞游戏机械键盘 幻彩背光 幻彩腕托', '/uploads/20181029\\2023e174613165a19025565866de9383.jpg', '2018-10-28 12:33:35', 2, 1),
(12, '索尼（SONY）XBA-N3AP Hi-Res混合驱动立体声耳机/耳麦', '1799.00', 6, '索尼（SONY）XBA-N3AP Hi-Res混合驱动立体声耳机/耳麦 支持iPhone（黑色）', '/uploads/20181028\\e938066dac8dd5ed3cc84a49dca89ea3.jpg', '2018-10-28 12:39:23', 3, 1),
(13, 'Beats Studio3 Wireless 录音师无线3代（限量款）', '2858.00', 8, 'Beats Studio3 Wireless 录音师无线3代 头戴式 蓝牙无线降噪游戏耳机 - 魅影灰（限量款）MQUF2PA/A', '/uploads/20181028\\d7cf0d51259a1227380d328be620d2c3.jpg', '2018-10-28 12:40:44', 3, 1),
(14, '森海塞尔（Sennheiser）Momentum in-ear 馒头 颈戴式蓝牙运动耳机', '1499.00', 5, '森海塞尔（Sennheiser）Momentum in-ear 馒头 颈戴式蓝牙运动耳机 手机耳机入耳式', '/uploads/20181028\\1e4bef88d4d891faa2c0a035e9a1f520.jpg', '2018-10-28 12:41:40', 3, 1),
(15, 'Beats Solo3 Wireless 头戴式 蓝牙无线耳机 手机耳机 游戏耳机 - 桀骜黑红（十周年版）', '2268.00', 8, 'Beats Solo3 Wireless 头戴式 蓝牙无线耳机 手机耳机 游戏耳机 - 桀骜黑红（十周年版） MRQC2PA/A', '/uploads/20181028\\5433f7a1bdf716b762748a9a433fd02b.jpg', '2018-10-28 12:42:56', 3, 1),
(16, '铁三角 AR3BT 便携头戴式无线蓝牙耳机 黑色 手机通话 运动跑步', '798.00', 7, '铁三角 AR3BT 便携头戴式无线蓝牙耳机 黑色 手机通话 运动跑步', '/uploads/20181028\\70db5f4b187e4e0df49507a4fd53cdd9.jpg', '2018-10-28 12:44:36', 3, 1),
(17, '铁三角 CK350iS 立体声运动入耳式耳机 游戏耳麦 手机通话 红色', '199.00', 7, '铁三角 CK350iS 立体声运动入耳式耳机 游戏耳麦 手机通话 红色', '/uploads/20181028\\4eda24a08d6fbf90e71e229d60cf5221.jpg', '2018-10-28 12:45:36', 3, 1),
(18, '铁三角 CKR35BT 运动无线蓝牙入耳式耳机 金色', '489.00', 7, '铁三角 CKR35BT 运动无线蓝牙入耳式耳机 金色 手机耳麦 颈挂线控', '/uploads/20181028\\f621e9d7c2f4c37a59bb5f0e3ed78b34.jpg', '2018-10-28 12:54:36', 3, 1),
(19, '斐尔可（FILCO）FKBC104MRL/EFB2「104双模忍者圣手二代」', '1279.00', 2, '斐尔可（FILCO）FKBC104MRL/EFB2「104双模忍者圣手二代」蓝牙无线键盘 樱桃机械键盘 黑色 红轴 游戏键盘', '/uploads/20181028\\446d8c4e7f02890bc2455ae59720413e.jpg', '2018-10-28 12:55:52', 2, 1),
(20, '阿米洛（Varmilo）VA108 键樱花定制系列机械键盘 樱花粉色cherry静音红轴', '979.00', 3, '阿米洛（Varmilo）VA108 键樱花定制系列机械键盘 樱花粉色cherry静音红轴', '/uploads/20181028\\6a6e8a44dfb7a788effefb69f96efb8a.jpg', '2018-10-28 12:57:27', 2, 1),
(21, '小米（MI）小米游戏鼠标 无线游戏鼠标', '249.00', 9, '小米（MI）小米游戏鼠标 无线游戏鼠标 欧姆龙20M微动 7200DPI 可编程按键 炫彩灯光', '/uploads/20181028\\08ed8cf3c170d5ea7ead5c1808cbc346.jpg', '2018-10-28 12:59:09', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `searchkey`
--

CREATE TABLE IF NOT EXISTS `searchkey` (
  `skid` int(11) NOT NULL AUTO_INCREMENT COMMENT '搜索记录ID',
  `skname` varchar(255) NOT NULL COMMENT '关键字名称',
  `sknum` int(11) NOT NULL COMMENT '关键字搜索次数',
  PRIMARY KEY (`skid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='搜索栏表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `uname` varchar(50) NOT NULL COMMENT '用户名',
  `upwd` varchar(50) NOT NULL COMMENT '密码',
  `uphone` varchar(50) NOT NULL COMMENT '手机号',
  `uemail` varchar(50) NOT NULL COMMENT '邮箱',
  `udate` datetime NOT NULL COMMENT '注册时间',
  `uqq` int(12) NOT NULL COMMENT '用户QQ',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `uname`, `upwd`, `uphone`, `uemail`, `udate`, `uqq`) VALUES
(1, '测试01', '202cb962ac59075b964b07152d234b70', '12345', '123@qq.com', '2018-10-31 15:30:45', 41888888),
(2, '2o((>ω< ))o', '202cb962ac59075b964b07152d234b70', '123', 'mimajiami@163.com', '2018-10-31 15:38:39', 987654321),
(3, 'le', '202cb962ac59075b964b07152d234b70', '123456', 'ceshi@126.com', '2018-11-15 22:50:43', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
