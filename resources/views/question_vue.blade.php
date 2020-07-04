@extends('layouts.navbar')
<script src="{{ asset('js/clearflag_jquery.js') }}" defer></script>
<link href="{{ asset('css/app3.css') }}" rel="stylesheet">

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <test-component>
    </test-component>
@endsection
