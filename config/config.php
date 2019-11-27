<?php
/**
 * 推送钉钉消息的配置项
 */
return array(
    'default' => array(
        // 是否开启机器人，值为false不再发送消息
        'enabled' => true,
        // 机器人的token值
        'token' => '',
        // 请求超时时间
        'timeout' => 2.0,
        // 是否开启ssl认证
        'ssl_verify' => true,
        // 开启安全设置
        'secret' => true,
    ),
    'other' => array(
        'enabled' => true,
        'token' => '',
        'timeout' => 2.0,
        'ssl_verify' => true,
        'secret' => true,
    ),
);
