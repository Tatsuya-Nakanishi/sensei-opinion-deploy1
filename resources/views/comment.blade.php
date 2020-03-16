{{-- layouts/auth.blade.phpを読み込む --}}
@extends('layouts.auth')


{{-- auth.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', '相談スレッド')




{{-- auth.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<div class="container">
   {{--<div style="text-align:center;" >--}}
  <div class="col-md-6 offset-md-3">
    <section class="section">
       <h2>相談の詳細</h2>
      <div class="card">
        <div class="item">
        <div class="content">
          <div class="media">
            <div class="media-body">
              <div class="text-bold">中西達也</div>
              <span class="text-ex-small text-gray">2020/03/15 18:36</span>
            </div>
          </div>
        </div>
        <hr>
        
        <div class="content">
          <h2 class="text-normal">
            <a class="text-bold" href="#">学校生活</a>
          </h2>
        </div>
        <hr>
        
        <div class="content">
          <p>
            毎日朝起きるのが辛くて遅刻してしまいます。<br>
            どうすればいいですか？
          </p>
        </div>
        <hr>
        
        <div class="content">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-lg btn-primary" href="{{--　相談の編集画面のアクション --}}" role="button" >編集する</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-lg btn-danger" href="{{--　delete actionを入れる --}}" role="button" >削除する</a>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <section class="section">
      <h2>コメント一覧</h2>
       <div class="card">
        <div class="item">
        <div class="content">
          <div class="media">
            <div class="media-body">
              <div class="text-bold">中山達郎</div>
              <span class="text-ex-small text-gray">2020/03/15 18:36</span>
            </div>
          </div>
        </div>
        <hr>
        
        <div class="content">
          <p>
           まず、しっかり寝ましょう。そして目覚まし時計をセットしましょう。<br>
           それでもダメならお家の人に起こしてもらいましょう。<br>
           また、どうしても遅刻してしまう時は必ず学校に連絡しましょう。
          </p>
        </div>
        <hr>
        
        <div class="content">
            <div class="col-md-6　offset-md-3">
              <a class="btn btn-lg btn-danger" href="{{--　delete actionを入れる --}}" role="button" >削除する</a>
            </div>
        </div>
      </div>

      </div>
    </section>
    <h3>↓に繰り返しでコメント一覧が表示される。</h3>
    
    <section class="section">
      <div class="form-group row">
        <h2>コメントする</h2>
        <div class="col-md-10">
            <textarea class="form-control" name="body" rows="20" placeholder=
               "お悩みに答えましょう！" >{{ old('body') }}</textarea>
        </div>
    </div>
                {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="投稿する">
    </section>
  </div>
    
  </div>
</div>
@endsection