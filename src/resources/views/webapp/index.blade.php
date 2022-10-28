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
                @foreach($study_times_days as $study_times_day)
                  <div class="main__study__item__number">{{$study_times_day->count_hour}}</div>
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
                @foreach($study_times_years as $study_times_year)
                  <div class="main__study__item__number">{{$study_times_year->count_hour}}</div>
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
    //棒グラフ
    $colum = [];
    foreach($study_times_bars as $study_times_bar){
     for ($i=0; $i < $piece_end_month[2]; $i++) {  //月の終わりの日付まで回す
        if ($i == $study_times_bar->date) {  //もし日付があったら、
          array_push($colum, [ (int)$study_times_bar->date , (int)$study_times_bar->total_hour ]);
        } else {
          array_push($colum, [$i, 0]);
        }
      }
    }
    $study_array_Json = json_encode($colum);  
    //JavaScriptにPHPの配列を渡すためには、一度配列をJson形式に配列を変換する必要がある


    //円グラフ
    $languages_name_array = [];
    $languages_hour_array = [];
    $languages_color_array = [];
    $languages_name_per_array = [];
    $l = 0;
    $cut = 1;//カットしたい文字数
    foreach($study_languages as $study_language){
      array_push($languages_name_array, $study_language['language_name']);
      $languages_per = ($study_language['total_hour']/$study_times_years[0]['count_hour'])*100; // (学習時間 / 年間合計学習時間)*100にして扇形の配分出す
      array_push($languages_hour_array, ($languages_per)); 
      array_push($languages_color_array, $study_language['language_color']);
      
      // echo "<pre>";
      // echo $study_language;
      // echo "</pre>";
      // echo $study_language['language_name'];
    }
    foreach ($languages_name_array as $language_name_array) {  //１つ１つの学習言語に対して、学習時間($lで判別)をセットにし、array_pushで予め用意していた空配列に足していく
      // [学習言語, 学習時間]の配列を定義、ここでデータを入れる
      // $language_name_array = ;
      array_push($languages_name_per_array, [$language_name_array, (int)$languages_hour_array[$l]]); 
      $l++; //$language_name_arrayが回るごとに$lを増やしていく
    }
    $languages_array_Json = json_encode($languages_name_per_array);
    print_r($languages_array_Json);
    // print_r($languages_name_array);
    // echo $study_times_years[0]['count_hour'];
    // print_r($languages_hour_array);
  ?>
  {{-- <p>{{ $piece_end_month[2] }}</p> --}}



 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
/* 棒グラフ */
google.charts.load('current', {
  'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawBarChart);

function drawBarChart() {

  // Create the data table.
  var barChartData = new google.visualization.DataTable();
  let study_array = {{$study_array_Json}}; //PHPからJavaScriptに多次元配列を受け渡す
  // console.log(study_array)
  barChartData.addColumn('number', 'day');
  barChartData.addColumn('number', 'time');
  barChartData.addRows(study_array);


  // Set chart options
  var barChartOptions = {
    'width': '100%',
    'height': '100%',
    'legend': 'none',
    'colors': ['#0f71bc'],
    hAxis: {
      textStyle: {
        color: '#97b9d1'
      }, //目盛りの色
      ticks: [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30], //目盛りを自分で設定
      gridlines: { //count:0 ,//補助線消す
        color: '#fff'
      },
    },
    vAxis: {
      format: '#h', //単位「ｈ」つける
      gridlines: {
        count: 0
      }, //補助線消す
      textStyle: {
        color: '#97b9d1'
      }, //目盛りの色
      baselineColor: 'transparent',
    },
  };

  // Instantiate and draw our chart, passing in some barChartOptions.
  var barChart = new google.visualization.ColumnChart(document.getElementById('barChart__div'));
  barChart.draw(barChartData, barChartOptions);
}


/* 円グラフ */
/* 学習言語 */
google.charts.setOnLoadCallback(drawPieLanguageChart);
function drawPieLanguageChart() {

  // Create the data table.
  var pieChartLeftData = new google.visualization.DataTable();
  let languages_array = {!! $languages_array_Json !!}; //PHPからJavaScriptに多次元配列を受け渡す
  pieChartLeftData.addColumn('string', 'Topping');
  pieChartLeftData.addColumn('number', 'Slices');
  pieChartLeftData.addRows(languages_array);

  // Set chart options
  var pieChartLeftOptions = {
    'width': '100%',
    'height': '100%',
    'pieHole': 0.4,
    legend: {
      maxLines: 4,
      position: 'none',
    },
    slices: {
      0: {
        color: '{{ $languages_color_array[0] }}'
      },
      1: {
        color: '{{ $languages_color_array[1] }}'
      },
      2: {
        color: '{{ $languages_color_array[2] }}'
      },
      3: {
        color: '{{ $languages_color_array[3] }}'
      },
      4: {
        color: '{{ $languages_color_array[4] }}'
      },
      5: {
        color: '{{ $languages_color_array[5] }}'
      },
      6: {
        color: '{{ $languages_color_array[6] }}'
      },
      
    },
    
    chartArea: {
      left: 40,
      top: 15,
      width: '100%',
      height: '70%'
    }
  };

  // Instantiate and draw our chart, passing in some pieChartLeftOptions.
  var pieChartLeft = new google.visualization.PieChart(document.getElementById('pieChart__left'));
  pieChartLeft.draw(pieChartLeftData, pieChartLeftOptions);
}

// onReSizeイベント
window.onresize = function() {
  drawBarChart();
  drawPieLanguageChart();
  // drawPieContentsChart();
}

</script>
</body>

</html>