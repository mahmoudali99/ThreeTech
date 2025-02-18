<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'reply',
        'user_id',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
