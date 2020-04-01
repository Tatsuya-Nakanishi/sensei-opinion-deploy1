{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '相談投稿画面')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お悩み新規作成</h2>
              <form action="{{ action('ThreadsController@create') }}" method="post" enctype="multipart/form-data">
                  
                  {{-- ここでif文でcount($errors)　--}}
                  @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                  
                <div class="form-group row">
                    <label class="col-md-2" for="category_id">お悩みの種類</label>
                    <div class="col-md-10">
　　　　　　　　　　　<select name="category_id" data-toggle="select" class="form-control select select-default"  >
                          <option value="1" name="1">学校生活</option>
                          <option value="2" name="2">人間関係</option>
                          <option value="3" name="3">学習面</option>
                          <option value="4" name="4">進路</option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2"　for="body">本文</label>
                      <div class="col-md-10">
                          <textarea class="form-control" name="body" rows="20" placeholder=
                          "先生方に相談したいお悩みを書きましょう！" >{{ old('body') }}</textarea>
                      </div>
                </div>
                {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿する">
              </form>
            </div>
        </div>
</div>
@endsection