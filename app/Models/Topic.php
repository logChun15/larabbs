<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    public function category()
    {
    return $this->belongsTo(Category::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    // 有了以上的关联设定，后面开发中我们可以很方便地通过 $topic->category 、 $topic->user 来获取到话题对应的
    // 分类和作者。

}
