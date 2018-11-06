@extends('layouts.front')

@section('content')
<div class="container">
  <hr color="#c0c0c0">
  <div class="row">
    <div class="profile col-md-8 mx-auto mt-3">
      <div class="profile">
        <div class="row">
          <div class="text col-md-12">
            <div class="date">
              {{ $profile->update_at->format('Y年m月d日') }}
            </div>
            <div class=“name">
              {{ $profile->name }}
            </div>
            <div class=“gender">
              {{ $profile->gender }}
            </div>
            <div class=“hobby">
              {{ $profile->hobby }}
            </div>
            <div class=“introduction">
              <h1>{{ str_limit($profile->introduction, 1500) }}
              </div>
            </div>
          </div>
        </div>
        <hr color="#c0c0c0">
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
