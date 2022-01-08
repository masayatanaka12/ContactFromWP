<?php get_header(); ?>

<body>

  <div class="contact">
    <h1 class="contact__ttl">Contact</h1>
    <!-- 対象のショートコードを記載 -->
    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>

<!-- 以下をContact Formに貼り付け -->

<!-- <table class="contact__table">
<tr>
<th class="contact__header">名前</th>
<td class="contact__body">
[text* your_name class:contact__text placeholder "お名前"]
</td>
</tr>
<tr>
<th class="contact__header">ラジオボタン</th>
<td class="contact__body contact__radio">
[radio radio id:radio use_label_element default:1 "ラジオボタン1" "ラジオボタン2"]
</td>
</tr>
<tr>
<th class="contact__header">メール</th>
<td class="contact__body">
[email* your_email class:contact__text placeholder "your-email@example.com"]
</td>
</tr>
<tr>
<th class="contact__header">電話</th>
<td class="contact__body">
[tel* your_phone class:contact__text placeholder "123-4567-8910"]
</td>
</tr>
<tr>
<th class="contact__header">セレクトボックス</th>
<td class="contact__body">
[select select class:contact__select "セレクトボックス1" "セレクトボックス2" "セレクトボックス3" "セレクトボックス4"]
</td>
</tr>
<tr>
<th class="contact__header">チェックボックス</th>
<td class="contact__body contact__checkbox">
[checkbox* checkbox use_label_element "チェックボックス1" "チェックボックス2" "チェックボックス3" "チェックボックス4"]
</td>
</tr>
<tr>
<th class="contact__header">お問い合わせ内容</th>
<td class="contact__body">
[textarea* textarea class:contact__textarea placeholder "お問い合わせ内容"]
</td>
</tr>
<tr>
<th class="contact__header">添付</th>
<td class="contact__body contact__file">
<label class="contact__file--label" for="contactFile">
ファイルを選択[file your_file limit:5mb filetypes:jpg|gif|png|pdf id:contactFile class:contact__file--input]
</label>
<span class="contact__file--name">選択されていません</span>
</td>
</tr>
</table>

[submit class:contact__submit "送信"]
</div> -->

  <?php get_footer(); ?>

</body>
</html>
