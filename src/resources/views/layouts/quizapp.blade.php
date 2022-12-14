<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- cssファイルの呼び出し --}}
  <link rel="stylesheet" href="{{asset('/quiz/kuizy.css')}}" >
  <title>@yield('title')</title>
</head>
<body>
   <header>
      <div class="headerWrapper">
        <div class="menu">
          <div id="menu" class="menuWrapper">
            <nav id="nav" class="subMenu">
              <ul>
                <li><a href="https://kuizy.net/auth/signup">ログイン</a></li>
                <li><a href="https://kuizy.net/quiz">クイズ</a></li>
                <li><a href="https://kuizy.net/analysis">診断</a></li>
                <li><a href="https://kuizy.net/sketch">お絵描き診断</a></li>
                <li><a href="https://kuizy.net/shiritori">お絵描きしりとり</a></li>
                <li><a href="https://kuizy.net/app/index">スマートフォンアプリ</a></li>
                <li><a href="https://kuizy.net/creators">作者ランキング</a></li>
                <li><a href="https://twitter.com/kuizy_net">公式Twitter</a></li>
                <li><a href="https://tayori.com/faq/f7ff5d02fc7486a40dc9dbfb1f16b5960a5a134c">よくある質問</a></li>
                <li><a href="https://kuizy.net/inquiry">お問い合わせ</a></li>
                <li><a href="https://kuizy.net/policy/toc">利用規約</a></li>
                <li><a href="https://kuizy.net/policy/pvy">プライバシーポリシー</a></li>
                <li><a href="https://nooon.jp/">運営会社</a></li>
                <li class="subMenuFooter"><p>© 2021 Nooon LLC</p></li>
              </ul>
            </nav>
          </div>
        </div>
        <div id="hamburger">
          <span class="inner_line" id="line1"></span>
          <span class="inner_line" id="line2"></span>
          <span class="inner_line" id="line3"></span>
        </div>
        <p class="homePageLink">
          <a href="https://kuizy.net/">kuisy</a>
        </p>
        <nav>
          <ul class="headerButtons">
            <li><a href="https://kuizy.net/prepare" class="headerQuizCreateButton">クイズ・診断を作る</a></li>
            <li>
              <a href="https://kuizy.net/search" class="headerSearchButton">
                <img src={{ asset('/quiz/img/mushimegane.png')}} width="12px" height="12px"
                  class="searchImg">
                <span>検索</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>


   <div class='mainWrapper'>
      {{-- <p><a href="{{ route('index')}}">クイズ一覧ページへ戻る</a></p> --}}
      @section('menu')
        <!-- タイトル↓ -->
         <h1 class='title'>@show</h1>
         <div class="content">
            @yield('content')
         </div>
   </div>
   <script src="{{ asset('/quiz/kuizy.js') }}"></script>
</body>
</html>

