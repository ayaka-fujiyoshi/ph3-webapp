<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
  <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="{{asset('/css/webapp_error.css')}}">
  <link rel="stylesheet" href="{{asset('/css/webapp.css')}}">
  <title>Posse app</title>
</head>

<body>
  <!-- トップ画面 -->
  <div class="footer__fixed">

    <!-- ヘッダー -->
    <header class="header">
      <div class="inner header__inner">
        {{-- <img class="posse__logo" src="https://posse.anti-pattern.co.jp/img/posseLogo.png" alt="posseLogo"> --}}
        <img class="posse__logo" src="{{asset('/posseLogo.png')}}" alt="posseLogo">
        <p class="header__date">4th week</p>
        <button class="header__sending__button"><a href="#modal">記録・投稿</a></button>
      </div>
    </header>

    <!-- メイン -->
    <main>
      <div class="inner main__inner">
        <section class="main__left">
          <!-- 学習時間 -->
          <div>
            <ul class="main__study__number">
              <li class="main__study__item first__item">
                <div class="main__study__item__title">Today</div>
                @foreach($study_times_years as $study_times_year)
                  <div class="main__study__item__number">{{$study_times_year->count_hour}}</div>
                @endforeach
                <div class="main__study__item__unit">hour</div>
              </li>
              <li class="main__study__item">
                <div class="main__study__item__title">Month</div>
                @foreach($study_times_months as $study_times_month)
                  <div class="main__study__item__number">{{$study_times_month->count_hour}}</div>
                @endforeach
                <div class="main__study__item__unit">hour</div>
              </li>
              <li class="main__study__item last__item">
                <div class="main__study__item__title">Total</div>
                @foreach($study_times_days as $study_times_day)
                  <div class="main__study__item__number">{{$study_times_day->count_hour}}</div>
                @endforeach
                <div class="main__study__item__unit">hour</div>
              </li>
            </ul>
          </div>
          <!-- 学習時間 棒グラフ -->
          <div class="inner main__bar__graph">
            <div id="barChart__div" class="barChart__div__wrapper" style="width: 96%; height: 85%;"></div>
          </div>

        </section>
        <section class="main__right">
          <ul class="main__pie__chart__inner">
            <!-- 学習言語 円グラフ -->
            <li class="main__pie__chart__item left__item">
              <div class="main__pie__chart__title">学習言語</div>
              <div id="pieChart__left" class="pieChart__position" style="width: 80%; height: 50%;"></div>
              <div class="pie__chart__legend__wrapper">
                <div class="pie__chart__legend__wrapper__small">
                  <div class="pie__chart__legend__items">
                    <div class="pie__chart__circle circle__js">
                      <div class="pie__chart__language ">JavaScript</div>
                    </div>
                  </div>
                  <div class="pie__chart__legend__items">
                    <div class="pie__chart__circle circle__css">
                      <div class="pie__chart__language pie__chart__language__css">css</div>
                    </div>
                  </div>
                </div>
                <div class="pie__chart__legend__wrapper__small">
                  <div class="pie__chart__legend__items2">
                    <div class="pie__chart__circle circle__php">
                      <div class="pie__chart__language ">PHP</div>
                    </div>
                  </div>
                  <div class="pie__chart__legend__items2">
                    <div class="pie__chart__circle circle__html">
                      <div class="pie__chart__language active">HTML</div>
                    </div>
                  </div>
                  <div class="pie__chart__legend__items2">
                    <div class="pie__chart__circle circle__laravel">
                      <div class="pie__chart__language ">Laravel</div>
                    </div>
                  </div>
                </div>
                <div class="pie__chart__legend__wrapper__small">
                  <div class="pie__chart__legend__items">
                    <div class="pie__chart__circle circle__sql">
                      <div class="pie__chart__language ">SQL</div>
                    </div>
                  </div>
                  <div class="pie__chart__legend__items">
                    <div class="pie__chart__circle circle__shell">
                      <div class="pie__chart__language ">SHELL</div>
                    </div>
                  </div>
                </div>

                <div class="pie__chart__legend__items">
                  <div class="pie__chart__circle circle__system">
                    <div class="pie__chart__language__system ">情報システム基礎知識（その他）</div>
                  </div>
                </div>
              </div>
            </li>

            <!-- 学習コンテンツ 円グラフ -->
            <li class="main__pie__chart__item right__item">
              <div class="main__pie__chart__title">学習コンテンツ</div>
              <div id="pieChart__right" class="pieChart__position" style="width: 80%; height: 50%;"></div>
              <div class="pie__chart__legend__wrapper">
                <div class="pie__chart__legend__items__right">
                  <div class="pie__chart__circle circle__js">
                    <div class="pie__chart__legend__contents ">ドットインストール</div>
                  </div>
                </div>
                <div class="pie__chart__legend__items__right">
                  <div class="pie__chart__circle circle__css">
                    <div class="pie__chart__legend__contents ">N予備校</div>
                  </div>
                </div>
                <div class="pie__chart__legend__items__right">
                  <div class="pie__chart__circle circle__php">
                    <div class="pie__chart__legend__contents ">POSSE課題</div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </section>
      </div>
    </main>

    <?php
      if(isset($study_date_post)){
        print_r($study_date_post)."<br>";
      } else {
        echo "date 不成功"."<br>";
      }
      if(isset($study_content_post)){
        print_r($study_content_post)."<br>";
      }
      if(isset($study_language_post)){
        print_r($study_language_post)."<br>";
      }
      if(isset($study_hour_post)){
        print_r($study_hour_post)."<br>";
      }
    ?>

    <!-- モーダル画面 -->
    <div class="modal-wrapper" id="modal">
      <a href="#!" class="modal-overlay"></a>
      <div class="modal-window">
        <div class="modal-content">
          <main id="modal__main">
            <div class="inner main__inner__ver__modal">
            <form action="" method="POST" name="contactForm" >
              @csrf
              <!-- ↓のdivタグ範囲内でflexかける -->
             <div class="form_contents_wrapper">
               <!-- モーダル左側 -->
              <section class="main__left__ver__modal">
                  <dl class="contact__form__list">
                    <div class="contact__form__item contact__form__item__date item__title">
                      <div id="appendTo">
                        <label for="study__date">学習日</label><br>
                        <input type="text" name="study__date" id="study__date">
                      </div>
                    </div>

                    <div class="contact__form__item">
                      <dt class="item__title">学習コンテンツ（複数選択可）</dt>
                      <dd class="self__checkbox" data-toggle="buttons">
                        <input type="checkbox" id="study__contents1" name="study_content[]" value="2" ><label for="study__contents1"
                          class="btn active">N予備校</label>
                        <input type="checkbox" id="study__contents2" name="study_content[]" value="1"><label for="study__contents2"
                          class="btn ">ドットインストール</label><br>
                        <input type="checkbox" id="study__contents3" name="study_content[]" value="3"><label for="study__contents3"
                          class="btn ">POSSE課題</label>
                      </dd>
                    </div>
                    <div class="contact__form__item">
                      <dt class="item__title">学習言語（複数選択可）</dt>
                      <dd class="self__checkbox" data-toggle="buttons">
                        <input type="checkbox" id="study__language1" name="study_language[]" value="4" ><label for="study__language1"
                          class="btn active">HTML</label>
                        <input type="checkbox" id="study__language2" name="study_language[]" value="2"><label for="study__language2"
                          class="btn ">css</label>
                        <input type="checkbox" id="study__language3" name="study_language[]" value="1"><label for="study__language3"
                          class="btn ">JavaScript</label><br>
                        <input type="checkbox" id="study__language4" name="study_language[]" value="3"><label for="study__language4"
                          class="btn ">PHP</label>
                        <input type="checkbox" id="study__language5" name="study_language[]" value="5"><label for="study__language5"
                          class="btn ">Laravel</label>
                        <input type="checkbox" id="study__language6" name="study_language[]" value="6"><label for="study__language6"
                          class="btn ">SQL</label>
                        <input type="checkbox" id="study__language7" name="study_language[]" value="7"><label for="study__language7"
                          class="btn ">SHELL</label><br>
                        <input type="checkbox" id="study__language8" name="study_language[]" value="8"><label for="study__language8"
                          class="btn ">情報システム基礎知識（その他）</label>
                      </dd>
                    </div>
                  </dl>
            <!-- モーダル右側 -->
              </section>
              <section class="main__right__ver__modal">
                 <dl class="contact__form__list">
                    <div class="contact__form__item">
                      <dt class="item__title"><label for="study__hour">学習時間</label></dt>
                      <dd><input id="study__hour" type="text" name="study__hour"></dd>
                    </div>

                    <div class="contact__form__item">
                      <dt class="item__title"><label for="twitter__contents">Twitter用コメント</label></dt>
                      <dd><textarea id="twitter__contents" type="text" name="twitter__contents">test</textarea></dd>
                    </div>
                    <div class="contact__form__item">
                      <dd class="self__checkbox" data-toggle="buttons">
                        <input type="checkbox" id="study__twitter" name="twitterButton" value="twitter">
                        <label for="study__twitter" class="btn twitter__wrapper">
                          <a href="" class="contact__form__twitter item__title">Twitterにシェアする</a>
                        </label>
                      </dd>
                    </div>
                  </dl>
              </section>
              </div>
              <!-- flexここまで -->

              <div class="contact__form__footer">
               <input type="submit" value="記録・投稿" id="record__button" class="header__sending__button__modal">
              </div>

            </form>

          </div>
            
            <!-- カレンダー画面の中に表示される決定ボタン 下一行-->
            <button id="determination__button" class="calender__modal__determination__button"><a
                href="#modal">決定</a></button>

            <div class="close__button__wrap">
              <span class="circle__background">
                <a href="#!" class="modal-close">×</a>
              </span>
            </div>
          </main>
        </div>


      </div>
    </div>

    <!-- ローディング画面 -->
    <div class="modal-wrapper" id="modal__loading">
      <a href="#!" class="modal-overlay"></a>
      <div class="modal-window">
        <div class="modal-content">
          <div class="loader-wrap">
            <div class="loader">Loading...</div>
          </div>
        </div>
        <!-- <a href="#!" class="modal-close">×</a> -->
      </div>
    </div>

    <!-- 記録・投稿完了画面 -->
    <div class="modal-wrapper" id="modal__determination">
      <a href="#!" class="modal-overlay"></a>
      <div class="modal-window">
        <div class="modal-content-circle">
          <div class="circle__wrap">
            <p class="circle__above">AWESOME!</p>
            <span class="circle">
              <div class="check__mark"></div>
            </span>
            <div class="circle__explain">記録・投稿</div>
            <div class="circle__explain">完了しました</div>
          </div>
        </div>
        <div class="close__button__wrap">
          <span class="circle__background">
            <a href="#!" id="modal__determination__close" class="modal-close modal-close__responsive">×</a>
          </span>
        </div>
      </div>
    </div>

    <!-- フッター -->
    <footer class="footer">
      <div class="Arrow-Left"></div>
      <p>
        <span>{{$pieces[0]}}</span>
        年
        <span>{{$pieces[1]}}</span>
        月
      </p>
      <div class="Arrow-Right"></div>
    </footer>
    <button class="header__sending__button__responsive"><a href="#modal">記録・投稿</a></button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="{{asset('/js/webapp.js')}}"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <?php
    $colums = [];
    // foreach($study_times_bars as $study_times_bar){
    //     if ($study_times_bar[2] == ) {   //NULLなら０を
    //     array_push($study_times_array, 0);    //empty()…変数が存在しない場合、または値が空かnullがセットされている場合にtrueを返す
    //   }else{                                  //値があればそれをintに変換して$study_times_arrayに入れる
    //     array_push($study_times_array, (int)$colum_graph_date[0][0]);
    //   }
    // }
    // $piece_end_month[2]
   
    
    //+=で合っているデータ入れる
    
    // $study_array_Json = json_encode($study_date_hour_array_data);  
    //JavaScriptにPHPの配列を渡すためには、一度配列をJson形式に配列を変換する必要がある
  ?>
  <p>{{ $piece_end_month[2] }}</p>
  @foreach($study_times_bars as $study_times_bar)
    <p>{{ $study_times_bar }}</p>
  @endforeach

  {{-- 一旦0で埋める --}}
  {{-- @for ($i = 1; $i <= {{$piece_end_month[2]}}; $i++)
   
  @endfor --}}
  <? print_r($colums); ?>
  <p><?php $day; ?></p>
  
  @foreach($pieces as $piece)
    <p>{{ $piece }}</p>
  @endforeach
  

</body>

</html>