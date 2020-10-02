@extends('layouts.navbar')

@section('content')
<div class="container">
  @foreach ($newses as $news )
  <div class="card">
  <h5 class="card-header">{{$news -> author}}</h5>
    <div class="card-body"> 
      {{$news -> title}}
      {{$news -> content}}
    </div>
  <div class="card-footer">{{$news -> date}}</div>
  </div>
  <br>
  @endforeach

</div>
@endsection