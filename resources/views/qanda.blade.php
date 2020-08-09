@extends('layouts.navbar')
@section('content')
<html>
    <head>

    </head>
    <body>

    <div class="container">
        <h2><b>よくある質問</b></h2>
        @foreach ($params as $param)
        <p>質問:{{ $param ->situmon }}</p>
        <p>回答:{{ $param ->answer }}</p>
        @endforeach
    </div>
    </body>
</html>
@endsection
