<?php
/*********普通消息***********/
/** 发送普通消息
    https://oapi.dingtalk.com/message/send_to_conversation?access_token=ACCESS_TOKEN
    //  请求参数
    sender  string => 消息发送者userId
    cid string => 群会话或者个人会话的id，通过JSAPI接口唤起联系人界面选择会话获取会话cid

    msg json => 消息内容，消息类型和样例可参考“消息类型与数据格式”文档。最长不超过2048个字节
    // 返回结果
    {
        "errcode": 0,
        "errmsg": "ok",
        "receiver": "UserID1|UserID2" // 接收用户的ID
    }
 */


/*********群发消息（群会话消息是指可以调用接口创建企业群聊会话，然后可以以系统名义向群里推送群聊消息）***********/
/**
    https://oapi.dingtalk.com/chat/send?access_token=ACCESS_TOKEN
    // 请求参数
    access_token string => 调用接口品证
    chatid string => 群会话的ID, 可以在调用创建群会话接口的返回结果里面获取，也可以通过dd.chooseChat获取
    msg json => 消息内容
    // 返回结果
    {
        "errcode": 0, //返回码
        "errmsg": "ok", //对返回码的文本描述内容
        "messageId":"abcd" // 加密的消息id
    }
 */




/*********工作通知消息***********/
/**发送消息
    https://oapi.dingtalk.com/topapi/message/corpconversation/asyncsend_v2?access_token=ACCESS_TOKEN

    //  请求参数
    agent_id  number => 应用agentId
    userid_list string => 接收者的用户userid列表，最大列表长度：100

    dept_id_list string => 接收者的部门ID列表，最大列表长度：20，接收者是部门iD下（包括子部门下）的所有用户

    to_all_user boolean => 是否发送给企业全部用户

    msg json对象  => 消息内容，最长不超过2048个字节
    // 返回接口
    {
        "errcode":0, // 返回码
        "errmsg":"ok", // 对返回码的文本描述内容
        "task_id":123 // 创建的发送任务ID
    }
 */
/**  查询消息发送进度
    https://oapi.dingtalk.com/topapi/message/corpconversation/getsendprogress?access_token=ACCESS_TOKEN
    // 请求参数
    agent_id number => 发送消息时使用的微应用的ID
    task_id number => 发送消息时钉钉返回的任务ID
    // 返回结果

    {
        "errcode":0,// 返回码
        "errmsg":"ok",// 对返回码的文本描述内容
        "progress":{
            "progress_in_percent":100, //取值 0-100，表示处理的百分比
            "status":2 // 任务执行状态，0=未开始，1=处理中，2=处理完毕
        }
    }
 */

/** 查询消息发送结果
    https://oapi.dingtalk.com/topapi/message/corpconversation/getsendresult?access_token=ACCESS_TOKEN
    // 请求参数
    agent_id number => 发送消息时使用的微应用的ID
    task_id number => 发送消息时钉钉返回的任务ID

    // 返回结果
    {
        "send_result":{
            "invalid_user_id_list":"zhangsan,lisi", //无效的用户id
            "forbidden_user_id_list":"zhangsan,lisi",//因发送消息超过上限而被流控过滤后实际未发送的userid。未被限流的接收者仍会被收到消息。
                                                    //限流规则包括：
                                                    //1、同一个微应用相同消息的内容同一个用户一天只能接收一次。
                                                    //2、同一个微应用给同一个用户发送消息，如果是ISV应用开发方式一天不得超过50次；如果是企业内部开发方式，此上限为500次。
            "failed_user_id_list":"zhangsan,lisi", //发送失败的用户id
            "read_user_id_list":"zhangsan,lisi", // 已读消息的用户id
            "unread_user_id_list":"zhangsan,lisi", // 未读消息的用户id
            "invalid_dept_id_list":"1,2,3" //无效的部门id
        },
        "errcode":0, // 返回码
        "errmsg":"ok" // 对返回码的文本描述内容
    }
 */
