<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
        // return $topic->user_id == $user->id;
        return $topic->user_id == $user->id; //只有文章作者用户才能对文章进行编辑
        // return true;
    }

    public function destroy(User $user, Topic $topic)
    {
        return true;
    }
}
