<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 18:21
 */

namespace DingTalkMessage\MsgTypeTemplate;
class OaTemplate extends CommonTemplate
{
    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'oa',
            'oa' => array(
                'message_url' => '', // 媒体文件ID，引用的媒体文件最大10MB
                'head' => array('bgcolor' => '', 'text' => ''),
                'body' => array(
                    'title' => '',
                    'form' => array(),// 表单内容 array(array('key'=>'', 'value' => ''), array('key'=>'', 'value' => ''))
                    'rich' => array(),// 富文本 array(key=>value, key=>value)
                    'content' => '', // 字符串内容 string
                    'image' => '', // 图片资源ID
                    'file_count' => '',//附件数目
                    'author' => '', //自定义作者名字
                )
            )
        );
    }
}