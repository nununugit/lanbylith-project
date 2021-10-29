@section('title', 'HOME')

@extends('layouts.app')

@section('content')
<body>
    <div class = "container">
        <link rel="stylesheet" href="{{ asset('css/lanbylith.css') }}"/>

        <div class="row row-cols-2 row-cols-md-2" >
          <div class="col mb-4" >
            <div class="card border-info" data-toggle="modal" data-target="#hint">
                <div class="card-body">
                  <img class="card-img" src="images/home_hint.png" alt="">
                </div>
                <div class="card-footer border-info">
                    <div >ヒント</div>
                </div>
            </div>
          </div>

            {{-- <div class="col mb-4" >
              <div class="card border-dark" data-toggle="modal" data-target="#qr-reader">
                  <div class="card-body">
                    <img class="card-img" src="images/home_camera.png" alt="">
                  </div>
                  <div class="card-footer border-dark">
                      <div >QR読み取り</div>
                  </div>
              </div>
            </div> --}}

            <div class="col mb-4" >
              <div class="card border-dark" data-toggle="modal" data-target="#answers">
                  <div class="card-body">
                    <img class="card-img" src="images/home_answer.png" alt="">
                  </div>
                  <div class="card-footer border-dark">
                      <div >今までの答え</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card border-warning" data-toggle="modal" data-target="#ranking">
                  <div class="card-body border-warning">
                    <img class="card-img" src="images/home_ranking.png" alt="">
                  </div>
                  <div class="card-footer border-warning">
                      <div >順位</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card  border-success" data-toggle="modal" data-target="#questionaire">
                  <div class="card-body">
                    <img class="card-img" src="images/home_q.png" alt=""> 
                  </div>
                  <div class="card-footer border-success">
                      <div >質問箱</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card border-danger" data-toggle="modal" data-target="#caution">
                  <div class="card-body">
                    <img class="card-img" src="images/home_caution.png" alt=""> 
                  </div>
                    <div class="card-footer obi border-danger">
                      <div>注意事項
                      </div>
                  </div>
              </div>
            </div>
    </div>
      <!-- モーダル -->
      <div class="modal fade" id="hint" tabindex="-1" role="dialog" aria-labelledby="hintLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="hintLabel">ヒント</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="box24">
                <p>
                  Next Lanbylith's Hint!!<br>
                  {{ $hints ->hint }} 
                </p>
            </div>             
  
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>

        <!-- モーダル -->
        <div class="modal fade" id="questionaire" tabindex="-1" role="dialog" aria-labelledby="questionaireLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="questionaireLabel">質問</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="jumbotron">
                        <h2><b>質問箱</b></h2>
                        <br>
                        <form action="/home" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="situmon" rows="10" cols="50" id="exampleFormControlSelect2" placeholder="質問を入れてください"></textarea>
                            </div>
                            @csrf
                            <input type="submit" name="qanda" value="送信" class="btn btn-primary btn-block">
                        </form>
                        
                        <a class="situmon" href="{{ route('qanda') }}">よくある質問</a>
                    </div>
                </div>

      
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
    </div>

    {{-- <!-- モーダル -->    
    <div class="modal fade" id="qr-reader" tabindex="-1" role="dialog" aria-labelledby="qr-readerLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="qr-readerLabel">QRコード読み取り</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div id="qr_login">
                <canvas id = "canvas"></canvas>
            </div>
            </div>
            <!--ここに書き込み-->

        <script src="https://cdn.jsdelivr.net/npm/vue-js-toggle-button@1.3.2/dist/index.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
        <script src="/js/jsQR/dist/jsQR.js"></script>
        <script src="{{ asset('js/qr_reader.js') }}" defer></script>
        <script src="{{ asset('js/on_off.js') }}" defer></script>
        <link href="{{ asset('css/qr_login.css') }}" rel="stylesheet">
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div> --}}
  
     <!-- モーダル -->
     <div class="modal fade" id="answers" tabindex="-1" role="dialog" aria-labelledby="answersLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="answersLabel">いままでの問題と答え</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>問題と答え</p>
            <div class="box17">
            @foreach ($answers as $answer)
              <p>
                {{ $answer->title }}:{{ $answer->answer }}
              </p>
              @endforeach
          </div>
                

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
    
    <!-- モーダル -->
    <div class="modal fade" id="caution" tabindex="-1" role="dialog" aria-labelledby="cautionLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cautionLabel">注意事項</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="box9">
              注意事項
              
              <ul>
            <li>
              今回使用するパスワードはいつも使っているパスワードは絶対に使わないでください。
            </li>
            <li>
              クリアする時間はランキングと関係ありません、走らずゆっくりとゲームを進めてください。
            </li>
            <li>
              お困りの際は1100教室までお越しください。
            </li>
            <li>
              必ずマスクは着用して、ゲームをお楽しみください。
            </li>

            <li>
              左上のlanbylithをタップすると、HOMEに帰ることができます。
            </li>
          </ul>
            </div>

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>


    <!-- モーダル -->
    <div class="modal fade" id="ranking" tabindex="-1" role="dialog" aria-labelledby="rankingLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rankingLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <link href="{{ asset('css/app6.css') }}" rel="stylesheet">
            <center><h2>RANKING</h2></center>
              <div class="my-parts">
                  @php
                  $counter=0;
                  @endphp
              <table>
                  <tr>
                    <th>順位</th>
                    <th>名前</th>
                    <th>得点</th>
                  </tr>
              @foreach ($ranking as $rank)
                  @php
                  $counter++
                  @endphp
              <tr>
                  <td>
                  {{ $counter }}</td>
                  <td>{{ $rank -> name }}</td>
                  <td>{{ $rank -> uscore }}</td>
              </tr>
              @endforeach 
                   
              </table>
              </div>   

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
  </div>
</body>
@endsection