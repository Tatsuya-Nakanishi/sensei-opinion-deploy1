{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 'ユーザー新規登録画面')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        
  <div class="col-md-10 mx-auto">
            <h2>ユーザー新規登録</h2>
    <form method="POST" action="{{ action('User\AuthController@postadd') }}"  enctype="multipart/form-data">
        <div class="container">
            <div class="form-group row">
                <label class="col-md-2">氏名</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="氏名"
                       id="InputName" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2">年齢（数字）</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="age" placeholder="年齢"
                      id="InputAge"  value="{{ old('age') }}">
                </div>
            </div>
             <fieldset class="form-group">
               <div class="row">
                 <legend class="col-form-label col-sm-2 pt-0">職業</legend>
                 <div class="col-sm-10">
                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="job" id="job1" value="児童・生徒" checked>
                     <label class="form-check-label" name="job" for="job1">
                          児童・生徒
                     </label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="job" id="job2" value="教員">
                     <label class="form-check-label" name="job" for="job2">
                          教員
                     </label>
                   </div>
                 </div>
               </div>
             </fieldset>
             <div class="form-group row">
               <label class="col-sm-2 control-label" for="school1">校種</label>
               <div class="col-sm-6">
                  <select name="school" data-toggle="select" class="form-control select select-default" id="school1">
                      <option>小学校</option>
                      <option>中学校</option>
                      <option>高校・高専</option>
                      <option>その他</option>
                  </select>
              </div>
             </div>
             <div class="form-group row">
               <label class="col-sm-2 control-label" for="InputEmail">メールアドレス</label>
               <div class="col-sm-6">
                 <input type="email" name="email" class="form-control" id="InputEmail" placeholder="メールアドレス"
                  value="{{ old('email') }}">
               </div>
             </div>
             <div class="form-group row">
               <label class="col-sm-2 control-label" for="InputPassword">パスワード</label>
               <div class="col-sm-6">
                  <input type="password" name="password" class="form-control" id="InputPassword" placeholder="パスワード"
                  value="{{ old('password') }}">
               </div>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-3 col-sm-6">
                 <button type="submit" class="btn btn-primary btn-block">新規登録</button>
               </div>
             </div>
              {{ csrf_field() }}
            </form>
          </div>
       </div>
</div>
    
@endsection