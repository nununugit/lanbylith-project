@extends('layouts.navbar')

@section('content')
<body>
<p>
    手抜きですいません
</p>
    @foreach ($hints as $hint)
        <p>{{$hint->number}}. {{$hint->hint}}</p>
    @endforeach
</body>
@endsection
