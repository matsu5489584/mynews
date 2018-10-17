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

  public function update()
  {
    $this->validate($request, Profile::$rules);

    $news = new Profile;
    $form = $request->all();

    return redirect('admin/profile/edit');
  }
}
