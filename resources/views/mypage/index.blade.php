{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 'マイページ')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<div class="container">
   <div class="col-md-6 mx-auto">
     <h2>プロフィール</h2>
     <table class="table table-striped">  
       <tr>
          <th>氏名</th>
          <td>{{ Auth::user()->name }}</td>
       </tr>  
       <tr>
          <th>年齢</th>
          <td>{{ Auth::user()->age }}</td>
       </tr>  
       <tr>
          <th>職業</th>
          <td>{{ Auth::user()->job }}</td>
       </tr>
       <tr>
          <th>校種</th>
          <td>{{ Auth::user()->school }}</td>
       </tr>
       <tr>
          <th>メールアドレス</th>
          <td>{{ Auth::user()->email }}</td>
       </tr>
      
     </table>
     <a class="btn btn-lg btn-primary" href="{{ action('User\AuthController@edit', ['id' =>  Auth::user()->id]) }}"
     role="button" >編集する</a>
   </div>
</div>

@endsection