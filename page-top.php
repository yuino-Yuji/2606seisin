<?php
/*
Template Name: トップページ
これはtopページ用テンプレートファイルです
*/
?>

<?php get_header(); ?>

<main role="main" class="main">

  <!-- ============================================
       FV — メインビジュアル
       ============================================ -->
  <section class="Fv" id="top">
    <div class="FvInner">
      <div class="FvBody">
        <p class="FvTag">妊活中のあなたへ</p>

        <h2 class="FvTitle"><span class="FvTitleAccent">妊活</span>をがんばる毎日に、<br>ほっと整う時間を。</h2>

        <div class="FvDivider" aria-hidden="true">
          <span class="FvDividerMark">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/divider-mark.svg" alt="" width="27" height="26">
          </span>
        </div>

        <p class="FvLead">冷えや疲れ、ストレスが気になる日々に。<br>Sakuraは、酸素カプセルを通じて、<br>妊活中のコンディションづくりを<br>やさしくサポートします。</p>

        <ul class="FvBadges">
          <li class="FvBadge">
            <span class="FvBadgeIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/pin-icon.webp" alt="" width="34" height="50"></span>
            <span class="FvBadgeLabel">藤が丘駅徒歩圏内</span>
          </li>
          <li class="FvBadge">
            <span class="FvBadgeIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/reserve-icon.webp" alt="" width="40" height="52"></span>
            <span class="FvBadgeLabel">完全予約制</span>
          </li>
          <li class="FvBadge">
            <span class="FvBadgeIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/key-icon.webp" alt="" width="28" height="42"></span>
            <span class="FvBadgeLabel">プライベート空間</span>
          </li>
        </ul>

        <div class="FvCtas">
          <a class="FvCtaLine" href="#">
            <span class="FvCtaLineIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/line-icon.webp" alt="" width="47" height="45">
            </span>
            <span class="FvCtaLineText">LINEで相談する</span>
          </a>
          <a class="FvCtaReserve" href="#">
            <span class="FvCtaReserveIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/reserve-icon.webp" alt="" width="40" height="52">
            </span>
            <span class="FvCtaReserveText">初回予約をする</span>
          </a>
        </div>

        <p class="FvNote">※妊娠中の方は酸素カプセルをご利用いただけません。</p>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
