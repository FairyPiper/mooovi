@extends('layout')

@section('content')
<div class="bgcolor-white pt1em pb1em" id="contents">  <div id="main_cnt_wrapper">
  <div id="yjContentsBody">
    <div class="yjContainer">
      <div class="form_box">
        <h2>mooovi<span>新規登録</span></h2>
         {!! Form::open(array('files' => true)) !!}
          @if (count($errors) > 0)
            <div id="error_explanation">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="label">
            {{ Form::label('email') }}
            {{ Form::email('email', '', ['placeholder' => 'メールアドレスを入力']) }}
          </div>
          <div class="label">
            {{ Form::label('password') }}
            {{ Form::password('password', ['placeholder' => 'パスワードを入力']) }}
          </div>
          <div class="label">
            {{ Form::label('password_confirmation') }}
            {{ Form::password('password_confirmation', ['placeholder' => 'パスワードを入力（確認）']) }}
          </div>
          <div class="label">
            {{ Form::label('name') }}
            {{ Form::text('name', '', ['placeholder' => 'ニックネームを入力（必須）']) }}
          </div>
          <div class="field">
            {{ Form::file('avatar') }}
          </div>
          
          <div class="submit">
          <div class="actions">
            {{ Form::submit('Create User', ['class' => 'btn btn--block']) }}
          </div></div>

          {!! Form::close() !!}

          <div class="more_link_box">
          <strong>すでにアカウントを持っていますか？</strong>
          <a href="/login">Log in</a>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
