<?php get_header(); ?>

<section class="p-concept c-section">
  <div class="c-inner">
    <div class="p-concept__flex">
      <div class="p-concept__before-img">
      </div>
      <div class="p-concept__box">
        <h2 class="c-section__title p-concept__title">ほんの少しの<br class="sp_display-none">ていねいな暮らしで<br class="sp_display-none">心穏やかに</h2>
        <div class="p-concept__content">
          <p>小さなお子様がいるママ、産後のママ、単身赴任の方、ご高齢家族、家事が苦手な方、お身体が不自由な方テキストテキストテキスト</p>
          <a href="page-concept.html" class="c-button2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><span>politelivingの想い</span></a>
        </div>
      </div>
      <div class="p-concept__after-img"></div>
    </div>
  </div>
</section>



<section id="service" class="p-service c-section">
  <div class="c-inner">
    <h2 class="c-section__title animate__slower wow fadeIn" data-wow-duration="3s">サービス内容<span class="c-section__sub-title">service</span></h2>
    <div class="p-service__content">
      <ul class="p-service__lists">
        <li class="p-service__list wow fadeInLeft" data-wow-delay=".4s">
          <h3>家事代行</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-list1.png" alt="">
          <p>掃除機かけ／雑巾かけ／キッチン周り／冷蔵庫／換気扇／エアコン掃除／お風呂掃除／トイレ掃除／洗濯／買い物代行／　お墓掃除／草取り／その他ご希望の家事・整理収納の内容　お家の整理収納作業／整理収納の相談</p>
          <a href="page-service.html" class="p-service__button">詳しくはコチラ</a>
        </li>
        <li class="p-service__list wow fadeInLeft" data-wow-delay=".6s">
          <h3>整理整頓</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-list2.png" alt="">
          <p>整理収納アドバイザー１級／終活アドバイザー／遺品整理士／２級FP技能士／色彩検定２級</p>
          <a href="page-service.html" class="p-service__button">詳しくはコチラ</a>
        </li>
        <li class="p-service__list wow fadeInLeft" data-wow-delay=".8s">
          <h3>セミナー開催依頼</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-list3.png" alt="">
          <p>毎月の自主セミナーは開催中です。<br>公民館からの依頼講座も毎年、開催しています。</p>
          <a href="page-service.html" class="p-service__button">詳しくはコチラ</a>
        </li>
      </ul>
      <a href="" class="c-button wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><span>お気軽にご相談ください</span></a>
    </div>
  </div>
</section>

<?php echo get_template_part('template-parts/area') ?>

<section id="price" class="p-price c-section">
  <div class="c-inner wow fadeIn" data-wow-duration="3s">
    <h2 class="c-section__title">料金について<span class="c-section__sub-title">PRICE</span></h2>
    <div class="p-price__content">
      <p>各プランの料金一覧・お支払い方法はこちらからご確認ください。</p>
      <a href="http://localhost:8888/polite-livingMEI-template/price/" class="c-button wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><span>料金を確認する</span></a>
    </div>
  </div>
</section>




<section id="profile" class="p-profile c-section wow fadeIn" data-wow-duration="3s">
  <div class="c-inner">
    <h2 class="c-section__title">自己紹介<span class="c-section__sub-title">PROFILE</span></h2>
    <div class="p-profile__flex">
      <div class="p-profile__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.png" alt="">
      </div>
      <div class="p-profile__content">
        <div class="p-profile__content-name">
          <p>株式会社politeliving</p>
          <p>代表：藤田美枝子（MEI）</p>
        </div>
        <div class="p-profile__content-info">
          <p>【保有資格】終活アドバイザー/遺品整理士/整理収納アドバイザー/2級FP技能士 テキストテキストテキストテキスト</p>
        </div>
        <a href="https://politeliving2022.com/" class="c-button2 wow fadeInUp" target="_blank" data-wow-duration="1s" data-wow-delay=".3s"><span>ブログをチェック</span></a>
      </div>
    </div>
  </div>

</section>

<?php echo get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>