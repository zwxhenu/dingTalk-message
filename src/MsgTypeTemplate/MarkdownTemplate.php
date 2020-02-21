<?php
/**
 * markdown文本消息
 *
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 18:33
 */

namespace DingTalkMessage\MsgTypeTemplate;


class MarkdownTemplate extends CommonTemplate
{

    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'markdown',
            'markdown' => array(
                'title' => '', // 首屏会话透出的展示内容
                'text' => '', // markdown格式的消息，建议500字符以内
            )
        );
    }
}