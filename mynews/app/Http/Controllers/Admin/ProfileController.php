<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //以下を追記
  public function edit()
  {
    return view('admin.profile.edit');
  }

  public function update()
  {
    return redirect('admin/profile/edit');
  }
}
