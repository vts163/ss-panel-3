<?php
//定义流量
$tokb = 1024;
$tomb = 1024*1024;
$togb = $tomb*1024;
//Define DB Connection  数据库信息
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','password');
define('DB_DBNAME','sspanel');
define('DB_CHARSET','utf8');
define('DB_TYPE','mysql'); 
/*
 * 下面的东西根据需求修改
 */

//define Plan
//注册用户的初始化流量
//默认5GiB
$a_transfer = $togb*5;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 100;
$check_max =200;

//name
$site_name = "ss-fly";
$site_url  = "https://www.ssfly.club";

//开启第三方评论组件 disqus
$enable_comment=true;
$site_identifier="hzshang666";
$site_src="https://ssfly-club.disqus.com/embed.js";

/**
 * 站点盐值，用于加密密码
 * 第一次安装请修改此值，安装后请勿修改！！否则会使所有密码失效，仅限加密方式不为1的时候有效
 */
$salt = "ss-panel";
/**
 * 密码加密方式，注意： 2.4以前的版本，请修改加密方式为「1」，否则会使密码失效！
 * 更多说明见wiki https://github.com/orvice/ss-panel/wiki/Install-Guide-zh_cn
 * 加密方式:
 * 1 md5
 * 2 带salt的Sha256加密，新安装建议使用此加密方式！
 */
$pwd_mode = 1;

//用户注册后获得的邀请码最低最高
//都设置为0用户就不能邀请
$user_invite_min = '1';
$user_invite_max = '1';



//配置邮箱，用来发送验证码
//推荐zoho服务,可以自定义域名
$account ='admin@email.com';
$user_pass='your_password';
$smtp_server='smtp.email.com';
$user_name='admin';
$smtp_secure='ssl';//'tsl' accepted
$mail_port=465;

/**
 *充值卡
 *格式: 单价(RMB)=>流量包(GB)
 *支持三类商品
 *推荐使用jiasale
 *
*/
$goods=[
	1=>1,
	3=>5,
	10=>20
];
//依次为上面三种充值卡的购买链接
//推荐使用jiasale自动发货
$order_href=[
	"http://www.jiasale.com",
	"http://www.jiasale.com",
	"http://www.jiasale.com"
]