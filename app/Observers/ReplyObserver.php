<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        // $reply->topic->increment('reply_count', 1); 每新增一条回复replt_count都会加一
        $reply->topic->reply_count = $reply->topic->replies->count(); //会先计算当前的回复话题数量然后再加一
        $reply->topic->save();

        $reply->content = clean($reply->content, 'user_topic_body'); //字段净化防止xss注入风险。话题回复的内容限定与话题的内容无异，因此我们使用同样的过滤规则 —— user_topic_body 。



    }

    public function updating(Reply $reply)
    {
        //
    }
}
