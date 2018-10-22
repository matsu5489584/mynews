<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
     protected $guarded = array('id');

     pubric static $rules = array(
       'news_id' => 'required',
       'edited_at' => 'required',
    );
}
