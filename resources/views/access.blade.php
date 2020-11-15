@extends('layouts.app')

  <!-- ファーストビュー -->
  @section('first_view')
  <div class="kasou_midashi">
    <h2>Access</h2>
    <p class="kasou_border">お店案内</p>
  </div>
  @endsection

  <!-- アクセス -->
  @section('access')
  <section id="access">
    <div class="access">
      <div class="access_box">
        <div id="access_details">
          <h3>アクセス</h3>
          <ul>
            <li>
              <dl class="access_details">
                <dt>営業日</dt>
                <dd>水・木・金・土曜日</dd>
            </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>営業時間</dt>
                <dd>11:00~16:00</dd>
              </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>住所</dt>
                <dd>岡山市南区東畦349-22<br>(ナビでは643-1と設定してください)</dd>
              </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>TEL番号<br>FAX番号</dt>
                <dd>086-282-8828<br>086-282-8835</dd>
              </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>最寄駅</dt>
                <dd>JR妹尾駅<br>岡山駅より宇野線(瀬戸大橋線)にて10分程度<br>妹尾駅より徒歩20分程度,タクシーで2分程度</dd>
              </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>駐車場</dt>
                <dd>有り(15台程度)</dd>
              </dl>
            </li>
            <li>
              <dl class="access_details">
                <dt>Mail</dt>
                <dd>shop@skipcafe.jp</dd>
              </dl>
            </li>
          </ul>
        </div>
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.777668298997!2d133.88102331522984!3d34.609783180457875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553f8dee5e58387%3A0x21b9ecd3433e3b30!2z77yz772L772J772Q!5e0!3m2!1sja!2sjp!4v1543541185015" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  @endsection