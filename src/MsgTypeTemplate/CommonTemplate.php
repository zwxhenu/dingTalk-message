<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/11/27
 * Time: 15:52
 */

namespace DingTalkMessage\MsgTypeTemplate;

abstract class CommonTemplate
{
    protected $message = array();
    protected $media_ids = array();
    protected $link_url = '';
    protected $title = '';
    protected $text = '';
}