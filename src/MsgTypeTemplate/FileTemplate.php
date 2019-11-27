<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 18:12
 */

namespace DingTalkMessage\MsgTypeTemplate;

class FileTemplate extends CommonTemplate
{
    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'file',
            'file' => array(
                'media_id' => current($this->media_ids), // 媒体文件ID，引用的媒体文件最大10MB
            )
        );
    }
}