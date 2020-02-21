<?php
/**
 * 文本消息模板
 *
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 13:38
 */

namespace DingTalkMessage\MsgTypeTemplate;

class TextTemplate extends CommonTemplate
{
    /**
     * 初始化文字消息
     *
     * TextTemplate constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->message = array(
            'msgtype' => 'text',
            'text' => array(
                'content' => $content
            )
        );
    }
}