{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/posts/index.blade.php","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"remove","lines":["s"],"id":166},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"remove","lines":["e"]}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["e"],"id":167},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":91},"action":"remove","lines":["<a herf='/categories/{{$post->category->id}}'>{{$post->category->name}}</a>"],"id":168},{"start":{"row":17,"column":16},"end":{"row":17,"column":58},"action":"insert","lines":["<a href=\"\">{{ $post->category->name }}</a>"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":58},"action":"remove","lines":["<a href=\"\">{{ $post->category->name }}</a>"],"id":169},{"start":{"row":17,"column":16},"end":{"row":17,"column":95},"action":"insert","lines":["<a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>"]}],[{"start":{"row":0,"column":15},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":170}],[{"start":{"row":1,"column":0},"end":{"row":3,"column":19},"action":"insert","lines":["@extends('layouts.app')","","@section('content')"],"id":171}],[{"start":{"row":28,"column":7},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":172},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"insert","lines":["@"]},{"start":{"row":29,"column":1},"end":{"row":29,"column":2},"action":"insert","lines":["e"]}],[{"start":{"row":29,"column":2},"end":{"row":29,"column":3},"action":"insert","lines":["n"],"id":173},{"start":{"row":29,"column":3},"end":{"row":29,"column":4},"action":"insert","lines":["d"]}],[{"start":{"row":29,"column":1},"end":{"row":29,"column":4},"action":"remove","lines":["end"],"id":174},{"start":{"row":29,"column":1},"end":{"row":29,"column":11},"action":"insert","lines":["endsection"]}],[{"start":{"row":3,"column":19},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":175}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":22},"action":"insert","lines":["{{Auth::user()->name}}"],"id":176}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":22},"end":{"row":4,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1659546840159,"hash":"be73e0cddb6050ec530e6d64b4add23813021f00"}