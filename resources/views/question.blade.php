@extends('navs.navbar_question')

@section('content')
<link href="{{ asset('css/app3.css') }}" rel="stylesheet">
<div class="parent">

    <table>
        @foreach ($questions as $question)
        <tr>
            <th>{{ $question -> qid  }}</th>
          <th>{{ $question -> title }}</th>
          <th><input value="回答" name="{{  $question -> qid  }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{  $question -> qid  }}"></th>
        </tr>
    </div>
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
            <div class="modal-footer">
                <form method="GET" {{-- action="{{ route('questions/api') }}" --}} >

                <input type="text">
                <input class="btn btn-primary" type="button" name="{{ $question -> qid  }}" value="送信">
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

        @endforeach
      </table>
@endsection
