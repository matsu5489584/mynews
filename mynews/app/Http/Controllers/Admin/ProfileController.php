<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistories;

use Carbon\Carbon;

class ProfileController extends Controller
{
    //以下を追記
  public function edit(Request $request)
  {
    return view('admin.profile.edit');
  }

  public function update(Request $request)
  {
    $this->validate($request, Profile::$rules);
    $news = Profile::find($request->id);
    $news_form = $request->all();
    if ($request->remove == 'true') {
            $news_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $news_form['image_path'] = basename($path);
        } else {
            $news_form['image_path'] = $news->image_path;
        }


    unset($form['_token']);
    unset($news_form['image']);
    unset($news_form['remove']);
    $news->fill($news_form)->save();

    // データベースに保存する
     $news->fill($form);
     $news->save();

                     // 以下を追記
        $history = new ProfileHistories;
        $history->profile_id= $profile->id;
        $history->edited_at = Carbon::now();
        $history->save();


    return redirect('admin/profile/edit');
  }
}
