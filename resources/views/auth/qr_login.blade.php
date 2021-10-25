
@extends('layouts.app')
@section('content')
<body>
    <div id="qr_login">
        <div class="text">QRコード読み取り</div>
        <br>
    </div>
        <canvas id="canvas"></canvas>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
        <script src="/js/jsQR/dist/jsQR.js"></script>
        <script src="{{ asset('js/qr_reader.js') }}" defer></script>
        <link href="{{ asset('css/qr_login.css') }}" rel="stylesheet">
</body>
@endsection