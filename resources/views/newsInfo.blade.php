@extends('layouts.app')

  <!-- ファーストビュー -->
  @section('first_view')
  <div class="kasou_midashi">
    <h2>News</h2>
    <p class="kasou_border">お知らせ</p>
  </div>
  @endsection

  <!-- ニュース詳細 -->
  @section('newsInfo')
  <section>
    <div id="news_details">
      <div class="news_details">
        <time>2020.01.01</time>
        <h4>お知らせタイトル</h4>
        <img src="{{ asset('/images/news_img01.png') }}" alt="">
        <p>
          ●お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト<br>
          ●お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト
        </p>
      </div>
  @endsection

      <!-- ニュース右ナビゲーション -->
  @section('newsNav')
      <div class="news_nav">
        <div class="news_details_contents">
          <a href="{ {url('/newsinfo') }}">
            <div class="news_img news_nav_img">
              <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
            </div>
            <div class="news_details_info">
              <time>2020.01.01</time>
              <h4>お知らせタイトル</h4>
              <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
            </div>
          </a>
        </div>
        <div class="news_details_contents">
          <a href="{ {url('/newsinfo') }}">
            <div class="news_img news_nav_img">
              <img src="{{ asset('/images/news_img01.png') }}" alt="休業のお知らせ">
            </div>
            <div class="news_details_info">
              <time>2020.01.01</time>
              <h4>お知らせタイトル</h4>
              <p>お知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキストお知らせテキスト</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="more_news">
      <a href="{ {url('/news') }}">ニュース一覧</a>
    </div>
  </section>
  @endsection