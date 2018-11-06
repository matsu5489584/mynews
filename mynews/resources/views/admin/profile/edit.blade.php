<!DOCTYPE html>
{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

@section('title', 'ニュースの新規作成')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>Myプロフィール</h2>
      <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="name">氏名（name）</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="gender">性別（gender）</label>
          <div class="col-md-10">
            <input type="radio" name="gender" value="男">男性
            <input type="radio" name="gender" value="女">女性
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="hobby">趣味（hobby）</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="introduction">自己紹介（introduction）</label>
          <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </div>
    </div>
  </form>
  {{-- 以下を追記 --}}
  <div class="row mt-5">
    <div class="col-md-4 mx-auto">
      <h2>編集履歴</h2>
      <ul class="list-group">
        @if ($form->profile_histories != NULL)
        @foreach ($form->profile_histories as $profilehistory)
        <li class="list-group-item">{{ $profilehistory->edited_at }}</li>
        @endforeach
        @endif
      </ul>
    </div>
  </div>
 </div>
</div>
@endsection
