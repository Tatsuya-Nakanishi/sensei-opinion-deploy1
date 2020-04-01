{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 管理者ログイン画面')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
  <div class="col-md-5 col-md-offset-4">
  <h3>ログイン</h3>
  <form action="#" method="post">
  <div class="form-group">
  <label for="email">メールアドレス</label>
  <input type="text" id="email" name="email" class="form-control">
  </div>
  <div class="form-group">
  <label for="password">パスワード</label>
  <input type="password" id="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary btn-block">ログイン</button>
  {{ csrf_field() }}
  </form>
 
  </div>
  </div>
</div>
@endsection