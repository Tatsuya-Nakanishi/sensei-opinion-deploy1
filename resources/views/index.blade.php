{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '相談一覧')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <div class="row">
            <h2>相談一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{-- 相談新規作成のアクションを入れる --}}" role="button" class="btn btn-primary">相談する</a>
            </div>
            <div class="col-md-8">
              <h2>ここに該当のカテゴリーの名前を表示する。</h2>
            </div>
        </div>
        
    <div style="text-align:center;">
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
      <h2>↓に繰り返しで該当の相談一覧を表示する</h2>
    </div>
    
    <div class="text-center">
      <ul class="pagination">
        <li class="active">
          <a href="#">1</a>
        </li>
        <li>
          <a href="#">2</a>
        </li>
        <li>
          <a href="#">3</a>
        </li>
        <li>
          <a rel="next" href="#">次</a>
        </li>
      </ul>
    </div>
</div>
          

@endsection