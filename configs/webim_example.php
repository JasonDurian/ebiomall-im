<?php
$config['server'] = array(
    //监听的HOST
    'host' => '0.0.0.0',
    //监听的端口
    'port' => '9503',
    //WebSocket的URL地址，供浏览器使用的
    'url' => 'ws://im.swoole.com:9503',
    //用于Comet跨域，必须设置为web页面的URL
    //比如：你的网页项目根目录（此项目为/path/to/genim/webroot）
    //配置的网址为http://im.swoole.com:8888
    'origin' => 'http://im.swoole.com:8888',
);

$config['swoole'] = array(
    'log_file'        => ROOT_PATH . '/log/swoole.log',
    'worker_num'      => 1,
    //不要修改这里
    'max_request'     => 0,
    'task_worker_num' => 1,
    //是否要作为守护进程
    'daemonize'       => 0,
);

$config['webim'] = array(
    //聊天记录存储的目录
    'log_file' => ROOT_PATH . '/log/webim.log',
    'send_interval_limit' => 2, //只允许1秒发送一次
    'storage' => array(
        'history_num' => 10,
    )
);

$config['storage'] = array(
    'history_num' => 10,
);

return $config;