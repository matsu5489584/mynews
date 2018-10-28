<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profile';
  protected $guarded = array('id');

  // 以下を追記
  public static $rules = array(
      'name' => 'required',
      'gender' => 'required',
      'hobby' => 'required',
      'introduction' => 'required',

  );

    // 以下を追記
    public function profile_histories()
    {
      return $this->hasMany('App\ProfileHistory');

    }
}
