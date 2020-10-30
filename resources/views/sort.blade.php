@extends('layouts.navbar')
@section('content')
<body>
        <link href="{{ asset('css/sort.css') }}" rel="stylesheet">
        <script src="{{ asset('js/sort.js') }}" defer></script>
    
    <div class="cp_bgpattern05">
   
        <div class = "container">
        
        
    <div class="right">
        <h2>
        残り{{ $count }}回
        </h2>
    </div>

    <div class="sort">
        <form method="POST" action="{{ url('api/sort') }}">
            @csrf
                <button class="btn-loading">
                  <span>PUSH ME</span>
                </button>
        </form>
    {{ $msg }}
    

    </div>
    <div class="jumbotron zone">
        <h2><b>※競技の注意</b></h2>
        <p>ボタンを押したらチームメイトに知らせて、172.16.11.X:8000に遷移してください</p>
        <p>Hard問題は3点、normal問題2点、easy問題1点です。</p>
        <p>1点消費することで、一つボールを運搬することができます。</p>
        <p>他チームとの情報共有を禁止します。</p>
    </div>
</div>
</div>    


</body>
@endsection