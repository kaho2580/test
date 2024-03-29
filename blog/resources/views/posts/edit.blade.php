<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
  <!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__contents'>
                <h2>本文</h2>
                <input type='text' name='post[contents]' value="{{ $post->contents }}">
            </div>
            <input type="submit" value="保存">
            <div class="back">[<a href="/">back</a>]</div>
        </form>
    </div>
</body>
</html>
@endsection