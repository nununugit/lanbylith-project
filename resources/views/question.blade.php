
@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/lanbylith.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<html>
<body>

<div class="container">
  <link href="{{ asset('css/question.css') }}" rel="stylesheet">

@unless(empty($message))
<link href="{{ asset('css/app_circle.css') }}" rel="stylesheet">
<script src="{{ asset('js/aci_jquery.js') }}" defer></script>
    @if(($message=='1'))
        <div class="circle display-none">
        </div>
    @endif

    @if(($message=='2'))
        <div class="cross display-none">
        ×
        </div>
    @endif

    @if(($message=='3'))
    <script>
        alert('既に解いた問題です');
    </script>
    @endif
@endunless

@foreach ($questions as $question)
  @if($question->qid == 3 )
  <div class="roulette">
    <div class="main">
       <button type="button" class="btn btn-my" id="spin"><span class="btn-label">Spin</span></button> 

       <button type="button" class="btn btn-reset" id="reset"><span class="btn-label">New Game</span></button> 
      <div class="plate" id="plate">
        <ul class="inner">

          <li class="number"><label><input type="radio" name="pit" value="15" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="1" /><span class="pit">1</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="20" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="2" /><span class="pit">2</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="21" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="3" /><span class="pit">3</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="22" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="4" /><span class="pit">4</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="23" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="5" /><span class="pit">5</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="24" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="6" /><span class="pit">6</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="25" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="7" /><span class="pit">7</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="26" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="8" /><span class="pit">8</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="27" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="9" /><span class="pit">9</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="28" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="10" /><span class="pit">10</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="29" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="11" /><span class="pit">11</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="30" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="12" /><span class="pit">12</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="31" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="13" /><span class="pit">13</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="32" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="14" /><span class="pit">14</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="33" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="16" /><span class="pit">16</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="34" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="17" /><span class="pit">17</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="35" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="18" /><span class="pit">18</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="36" /><span class="pit"></span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="19"/><span class="pit">19</span></label></li>
          <li class="number"><label><input type="radio" name="pit" value="0" /><span class="pit">0</span></label></li>
  
        </ul>
  
        <div class="data">
          <div class="data-inner">
            <div class="mask"></div>
            <div class="result">
              <div class="result-number">00</div>
              <div class="result-color">red</div>        
            </div>
          </div>
        </div>
      </div>
  
      <div class="comment">
      </div>

      <div class="previous-results">
        <ol class="previous-list">
          <li class='visuallyhidden placeholder'>No results yet.</li>
        </ol>
      </div>
    </div>
  </div>
  </div>
<script src="{{ asset('js/roulette.js') }}" defer></script>
<link href="{{ asset('css/roulette.css') }}" rel="stylesheet">

  @elseif($question->qid == 4)
  <h5>{{ $question -> title }}</h5>
  <div>
    <p>{!!  nl2br(e($question -> content))  !!}</p>
  </div>
    <div id="main">
        <div class="panel" id="js-show-panel">
        </div>
    </div>
<script src="{{ asset('js/slide_puzzle.js') }}" defer></script>
<link href="{{ asset('css/slide_puzzle.css') }}" rel="stylesheet">

  @else
  <h5>{{ $question -> title }}</h5>
    <div>
      <p>{!!  nl2br(e($question -> content))  !!}</p>
    </div>

    <div>
      <img src="{{ asset('images/'.$question->filename)}}">
    </div>

    <div>
      <p class="Form-Item-Label isMsg">回答</p>

      <form action="{{url('/question/'.$random_url.'/'.$difficulty)}}" method="post">
        <div>
          @csrf
          <div class="form-group row">
            <input class="form-control Form-Item-Input" type="text" name="answer" >
          </div>
          
          <div class="form-group row">
            <input class="form-control" type="hidden" name ="qid" value="{{$question -> qid}}">
          </div>
      
          <div class = "form-group row">
            <input class="btn btn-primary Form-Btn " type="submit" class= "btn btn-primary" value="送信する">
          </div>

        </div>
      </form>
    </div>
  @endif
@endforeach
</div>
</body>
</html>
@endsection
