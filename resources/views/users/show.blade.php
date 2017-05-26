@extends('layout')

@section('content')
<div class="user_page">
  <header class="user_page-header">
    <div class="yjContainer">
      <a href="">
        <div class="user_image"><img alt="Fix" src="/images/{{ Auth::user()->avatar }}"></div>
        <h2>{{ Auth::user()->name }}<span>さんのマイページ</span></h2>
      </a>
    </div>
  </header>
  <div class="pt1em pb1em" id="contents">  <div id="main_cnt_wrapper">
    <div id="yjContentsBody">
      <div class="yjContainer">
        <ul class="user_page-contents">
        @foreach (Auth::user()->reviews as $review)
          <li style="background-image: url({{ $review->product->image_url }})">
            <div class="meta">
              <header>
              <div class="title">{{ $review->product->title }}</div>
              <span class="star"><span class="rating-star"><i class="star-actived rate-{{ $review->rate }}0"></i></span></span>
              </header>
              <div class="user_review">{{ $review->review }}</div>
            </div>
          </li>
        @endforeach
        </ul>
      </div>
     </div>
    </div>
  </div>
</div>
@endsection