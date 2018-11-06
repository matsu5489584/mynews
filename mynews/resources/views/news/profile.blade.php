@extends('layouts.front')

@section('content')
<div class="container">
  <hr color="#c0c0c0">
  <div class="row">
    <div class="profile col-md-8 mx-auto mt-3">
      <div class="profile">
        <div class="row">
          <div class="text col-md-12">
            <div class=“name">
            名前: {{ $profile->name }}
            </div>
            <div class="gender">
            性別: {{ $profile->gender }}
            </div>
            <div class=“hobby">
              趣味: {{ $profile->hobby }}
            </div>
            <div class=“introduction">
              自己紹介: {{ str_limit($profile->introduction, 1500) }}
              </div>
            </div>
          </div>
        </div>
        <hr color="#c0c0c0">
      </div>
    </div>
  </div>
</div>
@endsection
