@extends('layouts.app')

  <!-- ファーストビュー -->
  @section('first_view')
  <div class="kasou_midashi">
    <h2>Contact</h2>
    <p class="kasou_border">お問い合わせ</p>
  </div>
  @endsection

  <!-- お問い合わせ -->
  @section('contact')
  <div id="contact">
    <p>なにかご質問ご相談がありましたら、下記のフォームよりお問い合わせください。</p>
  </div>
  <section id="form">
    <h3>お問い合わせフォーム</h3>
    <form>
      <div class="form">
        <label for="name">お名前<span>*</span></label>
        <input type="text" name="user_name" placeholder="お名前" required>
      </div>
      <div class="form">
        <label for="url">URL</label>
        <input type="text" name="url" placeholder="url">
      </div>
      <div class="form">
        <label for="mail">メールアドレス<span>*</span></label>
        <input type="text" id="mail" name="user_mail" placeholder="例) example@example.com" required>
      </div>
      <div class="form">
        <label for="mail">確認用メールアドレス<span>*</span></label>
        <input type="text" id="mail2" name="user_mail" placeholder="例) example@example.com" required>
      </div>
      <div class="form form_end">
        <label for="msg">お問い合わせ内容<span>*</span></label>
        <textarea name="message" maxlength="1000" placeholder="お問い合わせの内容を入力してください。" required></textarea>
      </div>
      <div class="submit">
        <input type="submit" value="送信">
      </div>
    </form>
  </section>
  @endsection