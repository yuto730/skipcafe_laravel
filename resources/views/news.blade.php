@extends('layouts.app')

  <!-- ファーストビュー -->
  @section('first_view')
  <div class="kasou_midashi">
    <h2>News</h2>
    <p class="kasou_border">お知らせ一覧</p>
  </div>
  @endsection

  <!-- ニュース一覧 -->
  @section('news')
  <section>
    <div class="news_flex">
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <!-- 複製 -->
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <div class="news_contents">
        <a href="{ {url('/newsinfo') }}">
          <div class="news_img">
            <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
          </div>
          <div class="news_info">
            <time>2020.01.01</time>
            <h4>お知らせタイトル</h4>
            <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
          </div>
        </a>
      </div>
      <!-- 複製 -->
    </div>
    <ul id="pagination">
      <li class="pagination"><a href="">前へ</a></li>
      <li class="pagination"><a href="">1</a></li>
      <li class="pagination"><a href="">2</a></li>
      <li class="pagination"><a href="">3</a></li>
      <li class="pagination"><a href="">次へ</a></li>
    </ul>
  </section>
  @endsection
