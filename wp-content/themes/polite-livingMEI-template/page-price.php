<?php get_header(); ?>


<section id="price" class="p-price c-section">
  <div class="c-inner">
    <h2 class="c-section__title">料金について<span class="c-section__sub-title">PRICE</span></h2>
    <div class="p-price__content">
      <table class="table">
        <!-- <thead class="table-Head">
          <tr class="table-Head-Row">
            <th class="table-Head-Row-Cell border-right"></th>
            <th class="table-Head-Row-Cell">地域</th>
            <th class="table-Head-Row-Cell">回数または時間</th>
            <th class="table-Head-Row-Cell">料金（税込み）
            </th>
          </tr>
        </thead> -->
        <tbody class="table-Body">
          <tr class="table-Body-Row">
            <td rowspan="2" class="table-Body-Row-Cell border-right bottom">価格</td>
            <td class="table-Body-Row-Cell"><?php the_field('place1'); ?></td>
            <td class="table-Body-Row-Cell"><?php the_field('place1-time'); ?></td>
            <td class="table-Body-Row-Cell"><?php the_field('place1-price'); ?>円</td>
          </tr>
          <tr class="table-Body-Row bottom">
            <td class="table-Body-Row-Cell"><?php the_field('place_other'); ?></td>
            <td class="table-Body-Row-Cell"><?php the_field('place_other-time'); ?></td>
            <td class="table-Body-Row-Cell"><?php the_field('place_other-price'); ?>円</td>

          </tr>
          <tr class="table-Body-Row border-top">
            <td rowspan="4" class="table-Body-Row-Cell border-right">交通費</td>
            <td class="table-Body-Row-Cell">東部地区</td>
            <td class="table-Body-Row-Cell">1回</td>
            <td class="table-Body-Row-Cell">2,200円</td>
          </tr>
          <tr class="table-Body-Row">
            <td class="table-Body-Row-Cell">伊豆地区</td>
            <td class="table-Body-Row-Cell">1回</td>
            <td class="table-Body-Row-Cell">4,400円</td>
          </tr>
          <tr class="table-Body-Row">
            <td class="table-Body-Row-Cell">中部地区</td>
            <td class="table-Body-Row-Cell">1回</td>
            <td class="table-Body-Row-Cell">3,300円</td>
          </tr>
          <tr class="table-Body-Row">
            <td class="table-Body-Row-Cell">西部地区</td>
            <td class="table-Body-Row-Cell">1回</td>
            <td class="table-Body-Row-Cell">5,500円</td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</section>

<?php echo get_template_part('template-parts/area'); ?>
<!-- area.php 呼び出し -->

<?php echo get_template_part('template-parts/contact'); ?>
<!-- contact.php 呼び出し -->

</main>

<?php get_footer(); ?>