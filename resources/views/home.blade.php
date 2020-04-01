{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


{{-- app.blade.phpの@yield('title')に'先生オピニオン'を埋め込む --}}
@section('title', '先生オピニオン')




{{-- app.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div style="text-align:center;">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1>先生オピニオンへようこそ！！</h1>
                    <a>〜先生オピニオンは全国の学校の先生にお悩みを相談できる掲示板サイトです〜</a>
                </div>
            </div>
            <div class="image">
                <img src="{{ secure_asset('img/sensei.jpg') }}">
            </div>
            <a class="btn btn-lg btn-primary" href="{{ action('ThreadsController@create') }}"  role="button" >相談する</a>
            <h2>お悩みの一覧を見る</h2>
        </div>
        <table class="table table-bordered table-striped">
            <thred>
                <td class="position-relative"><a href="threads/index?category_id=1" class="stretched-link">学校生活</a></td>
                <td class="position-relative"><a href="threads/index?category_id=2" class="stretched-link">人間関係</a></td>
                <td class="position-relative"><a href="threads/index?category_id=3" class="stretched-link">学習面</a></td>
                <td class="position-relative"><a href="threads/index?category_id=4" class="stretched-link">進路</a></td>
            </thred>
        </table>
    </div>
@endsection