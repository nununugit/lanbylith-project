@extends('layouts.app')
@section('content')
<html>
    <body>
    <div class="container">
        <h2 class="lanbylith-text"><b>よくある質問</b></h2>
        @foreach ($params as $param)
        <p class="lanbylith-text">質問:{{ $param ->situmon }}</p>
        <p class="lanbylith-text">回答:{{ $param ->answer }}</p>
        @endforeach
    </div>
    </body>
</html>
@endsection
