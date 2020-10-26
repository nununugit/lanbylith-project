@extends('layouts.navbar')
@section('content')
<body>
    <div class="container">

    <p>本番までにはきれいにしときます。</p>
    {{ $msg }}
    <form method="POST" action="{{ url('api/sort') }}">
    @csrf
        <input type="submit">
    </form>
    </div>
</body>
@endsection