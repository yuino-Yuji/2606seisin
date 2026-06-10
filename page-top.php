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
    <div class="FvHero" aria-hidden="true">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/top-FV-sp.webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/top-FV.webp" alt="" width="1361" height="1739">
      </picture>
    </div>

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

  <!-- ============================================
       Concern — 妊活中、こんなお悩みはありませんか？
       ============================================ -->
  <section class="Concern" id="concern">
    <div class="ConcernLeavesLeft" aria-hidden="true">
      <span class="ConcernLeaf ConcernLeaf01"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf01.webp" alt="" width="100" height="100"></span>
      <span class="ConcernLeaf ConcernLeaf02"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf02.webp" alt="" width="64" height="84"></span>
      <span class="ConcernLeaf ConcernLeaf03"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf03.webp" alt="" width="47" height="42"></span>
      <span class="ConcernLeaf ConcernLeaf04"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf04.webp" alt="" width="39" height="31"></span>
      <span class="ConcernLeaf ConcernLeaf05"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf05.webp" alt="" width="51" height="32"></span>
      <span class="ConcernLeaf ConcernLeaf06"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf06.webp" alt="" width="43" height="35"></span>
    </div>

    <div class="ConcernInner">
      <h2 class="ConcernTitle">妊活中、こんなお悩みはありませんか？</h2>

      <div class="ConcernCard">
        <ul class="ConcernList">
          <li class="ConcernListItem">冷えが気になり、身体のめぐりを整えたい</li>
          <li class="ConcernListItem">疲れやすく、なかなか休まらない</li>
          <li class="ConcernListItem">妊活のために、できることを少しでも増やしたい</li>
          <li class="ConcernListItem">通院や仕事との両立で、心も身体も疲れやすい</li>
          <li class="ConcernListItem">ストレスを感じることが多い</li>
          <li class="ConcernListItem">病院以外でもできるセルフケアを探している</li>
          <li class="ConcernListItem">まずは気軽に相談できる場所がほしい</li>
        </ul>
      </div>

      <p class="ConcernLead">妊活中の身体づくりには、「がんばる時間」だけでなく、<br>ほっと休みながら「整える時間」も大切です。</p>
    </div>

    <div class="ConcernLeavesRight" aria-hidden="true">
      <span class="ConcernLeaf ConcernLeaf07"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf07.webp" alt="" width="89" height="89"></span>
      <span class="ConcernLeaf ConcernLeaf08"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf08.webp" alt="" width="54" height="39"></span>
      <span class="ConcernLeaf ConcernLeaf09"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf09.webp" alt="" width="40" height="35"></span>
      <span class="ConcernLeaf ConcernLeaf10"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf10.webp" alt="" width="48" height="33"></span>
    </div>
  </section>

</main>
<?php get_footer(); ?>
