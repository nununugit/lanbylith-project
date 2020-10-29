@extends('layouts.navbar')
@section('content')
<body>
        <link href="{{ asset('css/sort.css') }}" rel="stylesheet">
        <script src="{{ asset('js/sort.js') }}" defer></script>
    <div class = "container">
        <div class="jumbotron mt-2">
        <h1><div>仕分け</div></h1>
        <br>

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
        </div>
    </div>
    <div id="myAlert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong>　{{ $msg }}
        <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
</body>
@endsection