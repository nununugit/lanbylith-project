
@extends('navs.navbar_rank')

@section('content')
<link href="{{ asset('css/app6.css') }}" rel="stylesheet">
<div class="container">
    <center><h2>RANKING</h2></center>
    <div class="my-parts">
        @php
        $counter=0;
        @endphp
    <table>
        <tr>
          <th>順位</th>
          <th>チーム名</th>
          <th>得点</th>
        </tr>

    @foreach ($granks as $grank)
        @php
        $counter++
        @endphp
    <tr>
        <td>
        {{ $counter }}</td>
        <td>{{ $grank -> gname }}</td>
        <td>{{ $grank -> gscore }}</td>
    </tr>
    @endforeach
    </table>
    </div>


</div>
@endsection
