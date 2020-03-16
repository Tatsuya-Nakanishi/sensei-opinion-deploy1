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
          <td>#</td>
       </tr>  
       <tr>
          <th>年齢</th>
          <td>#</td>
       </tr>  
       <tr>
          <th>職業</th>
          <td>#</td>
       </tr>
       <tr>
          <th>校種</th>
          <td>#</td>
       </tr>
       <tr>
          <th>メールアドレス</th>
          <td>#</td>
       </tr>
       <tr>
          <th>パスワード</th>
          <td>#</td>
       </tr>
     </table>
     <a class="btn btn-lg btn-primary" href="#" role="button" >編集する</a>
   </div>
    <div style="text-align:center;">
      <h3>投稿した相談</h3>
      <div class="content">
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <th>最終更新日時</th>
              <th>ユーザー名</th>
              <th>お悩みの種類</th>
              <th>本文</th>
              <th>返信件数</th>
              <th></th>
            </tr>
            <tr>
              <td>2020/03/15 18:36</td>
              <td>中西達也</td>
              <td>学校生活</td>
              <td>画面に画像が表示されません。</td>
              <td>4件</td>
              <td>
                <a class="btn btn-info" href="#">詳細</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>↓に繰り返しで自分が投稿した相談を表示する</h2>
    </div>
    
 <div style="text-align:center;">
      <h3>コメントした相談</h3>
      <div class="content">
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <th>最終更新日時</th>
              <th>ユーザー名</th>
              <th>お悩みの種類</th>
              <th>本文</th>
              <th>返信件数</th>
              <th></th>
            </tr>
            <tr>
              <td>2020/03/15 18:36</td>
              <td>中西達也</td>
              <td>学校生活</td>
              <td>画面に画像が表示されません。</td>
              <td>4件</td>
              <td>
                <a class="btn btn-info" href="#">詳細</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>↓に繰り返しで自分がコメントした相談を表示する</h2>
    </div>
  
</div>

@endsection