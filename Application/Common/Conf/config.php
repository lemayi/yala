<?php
return array(
    // 开启子域名或者IP配置
    'APP_SUB_DOMAIN_DEPLOY'   =>    1,
    'APP_SUB_DOMAIN_RULES'    =>    array(
        'pt.yala.com' => 'Platform',
        'gy.yala.com' => 'Supplier',
        'md.yala.com' => 'Store',
        'm.yala.com'  => 'Mobile',
    ),
    // URL不区分大小写
    'URL_CASE_INSENSITIVE' => true,
    // 用于生成密码的salt
    'SALT_KEY' => '3x3Fsc3xFG3D2ds',
    /* 数据库配置 */
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'yala', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'ly_', // 数据库表前缀
);