@extends('layouts.navbar')

@section('content')
<head>
  
</head>
<body>
    @foreach ($hints as $hint)
        <p>{{$hint->number}}. {{$hint->hint}}</p>
    @endforeach
</body>
@endsection
