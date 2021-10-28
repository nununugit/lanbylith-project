@section('title', 'HOME')

@extends('layouts.app')

@section('content')
<body>
    <div class = "container">
        <h2 class="lanbylith-text">学校のQRコードを探して、問題を答えよう！！！</h2>

        <div class="row row-cols-2 row-cols-md-2" >
          <div class="col mb-4" >
            <div class="card" data-toggle="modal" data-target="#hint">
                <div class="card-body">
                <h5 class="card-title">
                </h5>
              <p class="card-text"></p>
                </div>
                <div class="card-footer obi">
                    <div >ヒント</div>
                </div>
            </div>
          </div>

            <div class="col mb-4" >
              <div class="card" data-toggle="modal" data-target="#qr-reader">
                  <div class="card-body">
                  <h5 class="card-title">
                  </h5>
                <p class="card-text"></p>
                  </div>
                  <div class="card-footer obi">
                      <div >QR読み取り</div>
                  </div>
              </div>
            </div>

            <div class="col mb-4" >
              <div class="card" data-toggle="modal" data-target="#answers">
                  <div class="card-body">
                  <h5 class="card-title">
                  </h5>
                <p class="card-text"></p>
                  </div>
                  <div class="card-footer obi">
                      <div >今までの答え</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card" data-toggle="modal" data-target="#ranking">
                  <div class="card-body">
                  <h5 class="card-title">
                  </h5>
                <p class="card-text"></p>
                  </div>
                  <div class="card-footer obi">
                      <div >順位</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card" data-toggle="modal" data-target="#questionaire">
                  <div class="card-body">
                  <h5 class="card-title">
                  </h5>
                <p class="card-text"></p>
                  </div>
                  <div class="card-footer obi">
                      <div >質問箱</div>
                  </div>
              </div>
            </div>


            <div class="col mb-4" >
              <div class="card" data-toggle="modal" data-target="#caution">
                  <div class="card-body">
                  <h5 class="card-title">
                  </h5>
                <p class="card-text"></p>
                  </div>
                  <div class="card-footer obi">
                      <div >注意事項
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
              <h5 class="modal-title" id="hintLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- @foreach ($hints as $hint)
              {{ $hint }}                
              @endforeach --}}
              {{ $hints }}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>

        <!-- モーダル -->
        <div class="modal fade" id="questionaire" tabindex="-1" role="dialog" aria-labelledby="questionaireLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="questionaireLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="jumbotron mt-4">
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

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
    </div>

    <!-- モーダル -->    
    <div class="modal fade" id="qr-reader" tabindex="-1" role="dialog" aria-labelledby="qr-readerLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="qr-readerLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
    <div id="qr_login">
        <div class="text">QRコード読み取り</div>
        <br>
    </div>
    </div>
    <canvas id = "canvas"></canvas>
    <input type="button" value="OFF" onClick="OnOff(this);">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
        
        <script src="/js/jsQR/dist/jsQR.js"></script>
        <script src="{{ asset('js/qr_reader.js') }}" defer></script>
        <script src="{{ asset('js/on_off.js') }}" defer></script>
        <link href="{{ asset('css/qr_login.css') }}" rel="stylesheet">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
  
     <!-- モーダル -->
     <div class="modal fade" id="answers" tabindex="-1" role="dialog" aria-labelledby="answersLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="answersLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @foreach ($answers as $answer)
                {{ $answer->title }}
                {{ $answer->answer }}
            @endforeach
            
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
    
    <!-- モーダル -->
    <div class="modal fade" id="caution" tabindex="-1" role="dialog" aria-labelledby="cautionLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cautionLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            注意事項
          - 今回使用するパスワードはいつも使っているパスワードは絶対に使わないでください。
          - クリアする時間はランキングと関係ありません、走らずゆっくりとゲームを進めてください。
          - お困りの際は1100教室までお越しください。
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
  </div>
</body>
@endsection