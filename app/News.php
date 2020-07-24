<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";
    protected $primaryKey = 'new_id';
    public $incrementing = false;
    public $timestamps=true;
}
