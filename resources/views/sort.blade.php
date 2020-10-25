@extends('layouts.navbar')
@section('content')
<body>
    <p>本番までにはきれいにしときます。</p>
    {{ $msg }}
    <form method="POST" action="{{ url('api/sort') }}">
    @csrf
        <input type="submit">
    </form>
</body>
@endsection