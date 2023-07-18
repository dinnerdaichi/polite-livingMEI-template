<?php get_header(); ?>




<h1>お問い合わせフォーム</h1>

<!-- <form action="送信先のURLを入力" method="post">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="message">お問い合わせ内容:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea>
    <br

    <input type="submit" value="送信">
  </form> -->

<?php echo do_shortcode('[contact-form-7 id="26" title="コンタクトフォーム 1"]') ?>







</main>

<?php get_footer(); ?>