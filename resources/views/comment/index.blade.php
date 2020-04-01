{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '相談スレッド')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

  <div class="col-xs-8 col-xs-offset-2">
    <h2>お悩みの種類：{{ $thread->category->name }}
    	<small>投稿日：{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}</small>
    </h2>
    <p>{{ $thread->user->name }}</p>
    <p>{{ $thread->body }}</p>
    
    <hr />
    
    <h2>コメントする</h2>
    <form method="POST" action="{{ action('CommentsController@store', ['id' => $thread->id]) }}">
       {{ csrf_field() }}
       <div class="form-group">
          <input type="text" name="comment" placeholder="コメントしてください" class="form-control"
           rows="4"   value="{{ old('comment') }}">
          @if ($errors->has('comment'))
          <span class="error">{{ $errors->first('comment') }}</span>
          @endif
       </div>
       <p>
          <input type="submit" value="コメントする">
       </p>
    </form>
      
    <h3>コメント一覧</h3>
    @foreach($thread->comments as $single_comment)
    	    <p>{{ $single_comment->user->name }}</p>
    	<p>{{ $single_comment->comment }}</p><br />
    	@if(Auth::user()->id === $single_comment->user_id)
    	<a href="{{ action('CommentsController@delete', ['id' => $single_comment->id]) }}">削除</a>
    	@endif
    	<hr />
    @endforeach
  
  </div>
  
@endsection