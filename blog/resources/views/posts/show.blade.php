<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> 
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
            <h2 class="title">
             {{$post->title}}
            </h2>
                <div class='content'>
                    <div class="content__post">
                        <p>{{$post->body}}</p>
                        <p class='updated_at'>{{$post->updated_at}}</p>
                    </div>
                </div>
                            <div class="back">[<a href="/">back</a>]</div>
                            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <script>
            function submit_02() {
                "use strict";
                if(confirm('削除すると編集出来ません　\n本当に削除しますか？')){
                    document.getElementById("form_delete").submit();
                }
            }
        </script> 
    </body>
</html>