@extends('layout')

@section('content')
<div class="bgcolor-white pt1em pb1em" id="contents">  <div id="main_cnt_wrapper">
  <div id="yjContentsBody">
    <div class="yjContainer">
      <div class="form_box">
        <h2>mooovi <span>ログイン</span></h2>
        {{ Form::open() }}
          @if (count($errors) > 0)
            <div id="error_explanation">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div>
            {{ Form::email('email', '', ['placeholder' => 'メールアドレスを入力']) }}
          </div>
          <div>
            {{ Form::password('password', ['placeholder' => 'パスワードを入力']) }}
          </div>
          <div class="row">
            <div class="col-xs-6">
              {{ Form::checkbox('remember_me', '') }}
              {{ Form::label('', 'パスワードを記憶')}}
            </div>
            <div class="col-xs-6">パスワードを忘れましたか？</div>
            <div class="submit">{{ Form::submit('ログイン', ['class' => 'btn btn--block']) }}</div>
          </div>
        {{ Form::close() }}
        <div class="more_link_box">
        <strong>まだアカウントを持っていませんか？</strong>
        <a href="/register">Sign Up</a>
        <strong>パスワードをお忘れですか？</strong>
        <a href="/password/reset">Forgot your password?</a>
      </div>
    </div>
  </div>
</div>
@endsection
