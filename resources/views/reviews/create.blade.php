@extends('review_site')

@section('content')
<div id="main_cnt_wrapper">
  <div id="yjContentsBody">
    <div class="yjContainer">
      <span class="yjGuid"><a id="yjContentsStart" name="yjContentsStart"></a><img alt="ここから本文です" height="1" src="http://i.yimg.jp/yui/jp/tmpl/1.1.0/audionav.gif" width="1"></span>
      <div id="yjMain">
        <article class="section">
          <div class="container">
            <header class="header header--section">
              <h2 class="text-middle">
                <i class="icon-movie color-gray-light"></i>投稿
              </h2>
            </header>
            <div>
              <ul class="listview js-lazy-load-images">
                <li style="margin-bottom: 15px">
                  <a class="listview__element--right-icon" href="#">
                    <div class="box">
                      <div class="box__cell w80">
                        <div class="thumbnail thumbnail--photo">
                          <div class="thumbnail__figure" style="background-image: url({{ $product->image_url }});"></div>
                        </div>
                      </div>
                      <div class="box__cell pl1em">
                        <h3 class="text-middle text-break color-sub">
                          {{ $product->title }}
                        </h3>
                        <p class="text-xsmall">
                        </p>
                        <p class="text-xsmall opacity-60"></p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          {{ Form::model($review, array('action' => array('ReviewsController@store', $product->id))) }}
          <!-- <div style="margin: 8px 0">
            {{ Form::label('nickname', 'ニックネーム', ['style' => 'margin-right:8']) }}
            {{ Form::text('nickname') }}
          </div> -->
          <div style="margin: 8px 0">
            {{ Form::label('rate', '評価', ['style' =>  'margin-right:8;']) }}
            {{ Form::selectRange('rate', 1, 10, ['placeholder' => '評価', 'class' => 'searh__query', 'style' => 'text-align: right;']) }}
          </div>
          <div style="margin: 8px 0">
            {{ Form::textarea('review', '', ['placeholder' => 'レビューを書いてね！', 'style' => 'width: 100%;height: 300px;']) }}
          </div>
          <div class="row">
            <div class="col10 push1">
              {{ Form::submit('投稿する', ['class' => 'btn btn--block']) }}
            </div>
          </div>
          {!! Form::close() !!}
        </article>
      </div>
      <div id="yjSub">
@endsection