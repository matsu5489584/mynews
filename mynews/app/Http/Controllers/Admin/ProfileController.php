<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    //以下を追記
  public function edit()
  {
    return view('admin.profile.edit');
  }

  public function update(Request $request)
  {
    $this->validate($request, Profile::$rules);

    $news = new Profile;
    $form = $request->all();

    // データベースに保存する
     $news->fill($form);
     $news->save();


    return redirect('admin/profile/edit');
  }
}
