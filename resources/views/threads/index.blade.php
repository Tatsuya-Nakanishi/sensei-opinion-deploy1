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
                <a href="{{ action('ThreadsController@create') }}"  role="button" class="btn btn-primary">相談する</a>
            </div>
            <div class="col-md-8">
              
            </div>
        </div>
        
    <div style="text-align:center;">
      <div class="content">
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <th>相談投稿日</th>
              <th>ユーザー名</th>
              <th>お悩みの種類</th>
              <th>本文</th>
              <th>返信件数</th>
              <th></th>
              <th>操作</th>
            </tr>
            @foreach($threads as $thread)
            <tr>
              <td>{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}</td>
              <td>{{ $thread->user->name }}</td>
              <td>{{ $thread->category->name }}</td>
              <td>{{\Str::limit ($thread->body, 50) }}</td>
              <td>{{ count($thread->comments) }}</td>
              <td>
                  <a href="{{ action('ThreadsController@show'  , ['id' => $thread->id]) }}">詳細</a>
              </td>
              <td>
                  <div>
                    @if(Auth::user()->id === $thread->user_id)
                    <a href="{{ action('ThreadsController@edit', ['id' => $thread->id]) }}">編集</a>
                    @endif
                  </div>
                  <div>
                     @if(Auth::user()->id === $thread->user_id)
                     <a href="{{ action('ThreadsController@delete', ['id' => $thread->id]) }}">削除</a>
                     @endif
                  </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
          

@endsection