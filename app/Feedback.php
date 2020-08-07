<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";
    public $timestamps=true;
    public $incrementing = true;
    protected $fillable = ['id','feed_name','feed_title', 'feed_content', 'feed_phone', 
                                                'feed_status', 'feed_email','feed_rep'];
}