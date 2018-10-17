<!DOCTYPE html>
{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

@section('title', 'ニュースの新規作成')

<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">



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
                                  <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2" for="hobby">趣味（hobby）</label>
                              <div class="col-md-10">
                                  <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2" for="introdaction">自己紹介（introdaction）</label>
                              <div class="col-md-10">
                                  <textarea class="form-control" name="introdaction" rows="20">{{ old('introdaction') }}</textarea>
                              </div>
                          </div>                      
                          {{ csrf_field() }}
                          <input type="submit" class="btn btn-primary" value="更新">

    </div>
  </div>
</div>
@endsection
