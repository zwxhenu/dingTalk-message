<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 16:03
 */
namespace DingTalkMessage\MsgTypeTemplate;

class PictureTemplate extends CommonTemplate
{
    public function __construct()
    {
        $this->message = array(
            'msgtype' => 'image',
            'image' => array(
                'media_id' => current($this->media_ids),
            )
        );
    }
}