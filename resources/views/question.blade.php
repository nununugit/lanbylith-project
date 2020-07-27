
@extends('layouts.navbar')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<html>

<script src="{{ asset('js/app_percent_jquery.js') }}" defer></script>
<script src="{{ asset('js/clearflag_jquery.js') }}" defer></script>
<link href="{{ asset('css/app3.css') }}" rel="stylesheet">
    <body>


@unless(empty($message))
<script src="{{ asset('js/aci_jquery.js') }}" defer></script>
<link href="{{ asset('css/app_circle.css') }}" rel="stylesheet">
        @if(($message=='1'))
        <div class="circle">

        </div>
        @endif

        @if(($message=='2'))
        <div class="cross">
        ×
        </div>
        @endif

        @endunless
<div class="container">
        <div class="row row-cols-1 row-cols-md-4" >
            @foreach($questions as $question)
          <div class="col mb-4" >
            <div class="card percent flagcori{{ $question-> qid }}" data-toggle="modal" data-target="#exampleModal{{  $question -> qid  }}">
                <div class="card-body">
                <h5 class="card-title">{{ $question-> qid }}</h5>
              <p class="card-text">{{ $question -> title }}</p>
                </div>

                <div class="card-footer obi">
                    <div class="car{{ $question -> qid }}">正答率 0%</div>
                </div>
            </div>
          </div>
            @endforeach
        </div>

        @foreach ($questions as $question)
        <!-- モーダルの設定 -->
        <div class="modal fade" id="exampleModal{{  $question -> qid  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ $question -> title }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>{{ $question -> content }}</p>
                </div>
                <form action="/question" method="post">
                <div class="modal-footer">
                        @csrf
                        <div class="form-group row">
                            <input class="form-control" type="text" name="answer" >
                        </div>

                        <div class="form-group row">
                            <input class="form-control" type="hidden" name ="qid" value="{{$question -> qid}}">
                        </div>


                        <div class = "form-group row">
                            <input class="btn btn-primary " type="submit" class= "btn btn-primary" value="送信">
                        </div>


                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div><!-- /.modal-footer -->
            </form>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
            @endforeach
    </div>
    </body>
</html>
@endsection
