@section('title', 'HOME')

@extends('layouts.app')

@section('content')
<body>
    <div class = "container">
        <h2><b>学校のQRコードを探して、問題を答えよう！！！</b></h2>
        <div class="jumbotron mt-4">
        <h2><b>質問箱</b></h2>
      <br>
      <form action="/home" method="post">
          @csrf
        <div class="form-group">
            <textarea class="form-control" name="situmon" rows="10" cols="50" id="exampleFormControlSelect2" placeholder="質問を入れてください"></textarea>
        </div>
        @csrf
        <input type="submit" name="qanda" value="送信" class="btn btn-primary btn-block">
        </form>

    <a class="situmon" href="{{ route('qanda') }}">よくある質問</a>
    </div>
    </div>
</body>
@endsection