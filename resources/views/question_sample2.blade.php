@extends('layouts.navbar')

@section('content')

<link href="{{ asset('css/app3.css') }}" rel="stylesheet">
<div class="container">
    <div class="row row-cols-1 row-cols-md-5">
        @if(!empty($message))
        <script>
            alert('{{ $message }}');
          </script>
        @endif

            @if(empty($clearflags))
            @foreach($questions as $question)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $question -> qid  }}</h5>
              <p class="card-text">{{ $question -> title }}</p>
              <input value="回答" name="{{  $question -> qid  }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{  $question -> qid  }}">
                </div>
            </div>
              @endforeach
            @endif

            @unless(empty($clearflags))

            @php
            $i = 1
            @endphp

            @foreach ($questions as $question)
            @foreach ($clearflags as $clearflag)

            @if($question->qid === $clearflag->question_qid)
            <div class="card cleard" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $i  }}</h5>
              <p class="card-text">{{ $question -> title }}</p>
              <button class="btn btn-primary">cleard</button>
                </div>
            </div>

            @php
            $i++
            @endphp

        @break
            @elseif($loop->last)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $i  }}</h5>
              <p class="card-text">{{ $question -> title }}</p>
              <input value="回答" name="{{  $question -> qid  }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{  $question -> qid  }}">
                </div>
            </div>
            @php
            $i++
            @endphp

            @endif
            @endforeach
            @endforeach

            @endunless
        </table>
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
</div>
@endsection
