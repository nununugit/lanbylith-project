
@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<html>
<body>

<div class="container">

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
  <h5>{{ $question -> title }}</h5>
    <div>
      <p>{!!  nl2br(e($question -> content))  !!}</p>
    </div>
<form action="{{url('/question/'.$random_url.'/'.$difficulty)}}" method="post">
  <div>
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
  </div>
</form>
@endforeach
<div>
</div>
</body>
</html>
@endsection
