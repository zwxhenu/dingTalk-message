<?php
/**
 *
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 17:42
 */

namespace DingTalkMessage\MsgTypeTemplate;

class VideoTemplate extends CommonTemplate
{
    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'voice',
            'voice' => array(
                'media_id' => current($this->media_ids), // 音频文件ID，播放长度不超过60s, AMR格式
                'duration' => 10, //小于 60 音频时长
            )
        );
    }
}