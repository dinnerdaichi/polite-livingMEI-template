<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>politelivingMEI</title>
  <link rel="stylesheet" href="./assets/CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="./assets/JS/script.js"></script>
  <?php wp_head(); ?>
</head>

<body>

  <div class="nav-back"></div>

  <header class="l-header">
    <div id="fixed-header">
      <div class="fixed-header__flex">
        <div class="fixed-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_logo.png" alt="">
        </div>
        <ul class="fixed__nav">
          <li><a href="<?php echo esc_url(home_url());?>">トップページ</a></li>
          <li><a href="#service">サービス内容</a></li>
          <li><a href="#area">対応エリア</a></li>
          <li><a href="#price">料金</a></li>
          <li><a href="#profile">自己紹介</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
        </ul>
      </div>
    </div>

    <div class="openbtn1"><span></span><span></span><span></span></div>

    <div id="fixed-s-header">
      <div class="fixed-s-header__flex">
        <!-- <div class="fixed-s-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_logo.png" alt="">
        </div> -->
        <ul class="fixed__s-nav">
          <li class="links"><a href="#service">サービス内容</a></li>
          <li class="links"><a href="#area">対応エリア</a></li>
          <li class="links"><a href="#price">料金</a></li>
          <li class="links"><a href="#profile">自己紹介</a></li>
          <li class="links"><a href="#contact">お問い合わせ</a></li>
        </ul>
      </div>
    </div>

    <div class="c-inner">
      <div class="l-header__content">
        <div class="l-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_logo.png" alt="">
        </div>
        <div class="l-header__nav">
          <ul class="l-header__list">
            <li class="l-header__list-item">
              <a href="#service">サービス内容</a>
            </li>
            <li class="l-header__list-item">
              <a href="#area">対応エリア</a>
            </li>
            <li class="l-header__list-item">
              <a href="#price">料金</a>
            </li>
            <li class="l-header__list-item">
              <a href="#profile">自己紹介</a>
            </li>
            <li class="l-header__list-item">
              <a href="#contact">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>

    <section class="p-fv">
      <div class="p-fv__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv.jpg" alt="">
        <div class="ab">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wave-item1.png" alt="" class="before">
        </div>
        <div class="bo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wave-item2.png" alt="" class="before">
        </div>
      </div>
    </section>