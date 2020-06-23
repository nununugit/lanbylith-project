<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    @extends('navs.navbar_tate')

    <link href="{{ asset('css/app_percent.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app_percent.js') }}" defer></script>
    <div class="progress-pie-chart" data-percent="43">
        <div class="ppc-progress">
          <div class="ppc-progress-fill"></div>
        </div>
        <div class="ppc-percents">
          <div class="pcc-percents-wrapper">
            <span>%</span>
          </div>
        </div>
      </div>

    </body>
</html>
