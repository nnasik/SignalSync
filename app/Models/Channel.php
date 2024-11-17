<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model{

    protected $fillable = ['tg_id','tg_title','tg_username','name','system_action'];
}
