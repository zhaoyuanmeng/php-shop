<?php
return array(
	'DB_TYPE' =>  'pdo',     // mysql,mysqli,pdo
    'DB_DSN'    => 'mysql:host=localhost;dbname=php39;charset=utf8',
    'DB_USER' =>  'root',      // 用户名
    'DB_PWD' =>  '123456',          // 密码
    'DB_PORT' =>  '3306',        // 端口
    'DB_PREFIX' =>  'p39_',    // 数据库表前缀
    //'DB_HOST' =>  'localhost', // 服务器地址
    //'DB_NAME' =>  'php39',          // 数据库名
    //'DB_CHARSET' =>  'utf8',      // 数据库编码默认采用utf8
    'DEFAULT_FILTER' => 'trim,htmlspecialchars',

    /************ 图片相关的配置 ***************/
    'IMAGE_CONFIG' => array(
    	'maxSize' => 1024*1024,
    	'exts' => array('jpg', 'gif', 'png', 'jpeg'),
    	'rootPath' => './Public/Uploads/',  // 上传图片的保存路径  -> PHP要使用的路径，硬盘上的路径
    	'viewPath' => 'http://www.keshe.com/Public/Uploads/',   // 显示图片时的路径    -> 浏览器用的路径，相对网站根目录
    ),
);