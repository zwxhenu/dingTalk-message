<?php
/**
 * 链接消息模板
 *
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 18:16
 */
namespace DingTalkMessage\MsgTypeTemplate;

class LinkTemplate extends CommonTemplate
{
    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'link',
            'link' => array(
                'messageUrl' => $this->link_url, // 消息点击链接地址
                'picUrl' => current($this->media_ids), // 图片地址
                'title' => $this->title,
                'text' => $this->text,
            )
        );
    }
}