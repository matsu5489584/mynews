<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistory;

use Carbon\Carbon;

class ProfileController extends Controller
{
  //以下を追記
  public function edit(Request $request)
  {
    $profile = new Profile;
    return view('admin.profile.edit', ['form' => $profile]);
  }
  public function update(Request $request)
  {

    $this->validate($request, Profile::$rules);
    $profile = new Profile;
    $form = $request->all();
    unset($form['_token']);

    // データベースに保存する
    $profile->fill($form);
    $profile->save();

    // 以下を追記
    $profilehistory = new ProfileHistory;
    $profilehistory->profile_id = $profile->id;
    $profilehistory->edited_at = Carbon::now();
    $profilehistory->save();


    return redirect('admin/profile/edit');
  }
}
