<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Skipcafe</title>
<link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>

  <!-- ヘッダー -->
  <div id="hamburger" class="hamburger">
    <span class="hamburger_line"></span>
  </div>
  <header>
    <div class="header_flex">
      <h1>
        <a href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="スキップカフェロゴ"></a>
      </h1>
      <nav id="nav">
        <ul>
          <li><a href="{ {url('/news') }}">News</a></li>
          <li><a href="{ {url('/access') }}">Access</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="http://skip.ocnk.net/">Online&nbsp;Shop</a></li>
        </ul>
      </nav>
      <div class="instagram">
        <a href="https://www.instagram.com/skipcafe/" target="_blank">
          <img src="{{ asset('/images/instagram.png') }}" alt="インスタグラム">
        </a>
      </div>
    </div>
  </header>

  <!-- index -->
  @yield('top_first_view')
  @yield('catch_copy')
  @yield('movie')
  @yield('about')
  @yield('top_news')

  <!-- 下層ページ -->
  @yield('first_view')

  <!-- news -->
  @yield('news')

  <!-- newsInfo -->
  @yield('newsInfo')
  @yield('newsNav')

  <!-- access -->
  @yield('access')

  <!-- contact -->
  @yield('contact')

  <!-- フッター -->
  <footer>
    <div>
      <a href="{{ url('/') }}">
        <img src="{{ asset('/images/logo.png') }}" alt="スキップカフェロゴ">
      </a>
    </div>
    <p id="copyright">&copy;skipcafe&nbsp;all&nbsp;right&nbsp;reserved</p>
  </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    $("#hamburger").on("click", function(){
      $("#nav").toggleClass("sp_nav");
    });
  </script>
  <script>
    $("#hamburger").on("click", function(){
      $("#hamburger").toggleClass("close");
    });
  </script>
</body>
</html>