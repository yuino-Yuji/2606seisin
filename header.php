<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="">
  <meta name="robots" content="noindex">
  <meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <meta property="og:url" content="<?php echo home_url('/'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:locale" content="ja_JP">
  <?php
  if (is_front_page() || is_home()) {
    echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '">';
  } else {
    echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">';
  }
  ?>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body>
  <header class="Header" id="Header">
    <div class="HeaderInner">
      <?php if (is_front_page() || is_home()) : ?>
        <h1 class="HeaderLogo">
        <?php else : ?>
        <div class="HeaderLogo">
        <?php endif; ?>
        <a class="HeaderLogoLink" href="<?php echo esc_url(home_url('/')); ?>">
          <span class="HeaderLogoImage">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/header-logo.webp" alt="Sakura - BODY MAINTENANCE SALON -" width="330" height="158">
          </span>
        </a>
        <?php if (is_front_page() || is_home()) : ?>
        </h1>
      <?php else : ?>
        </div>
      <?php endif; ?>

      <div class="HeaderEnd" id="HeaderEnd">
        <nav class="HeaderNav" aria-label="メインナビゲーション">
          <ul class="HeaderNavList">
            <li class="HeaderNavItem"><a class="HeaderNavLink" href="#concern">はじめての方へ</a></li>
            <li class="HeaderNavItem"><a class="HeaderNavLink" href="#service">酸素カプセルについて</a></li>
            <li class="HeaderNavItem"><a class="HeaderNavLink" href="#flow">ご利用の流れ</a></li>
            <li class="HeaderNavItem"><a class="HeaderNavLink" href="#voice">お客様の声</a></li>
            <li class="HeaderNavItem"><a class="HeaderNavLink" href="#faq">よくあるご質問</a></li>
          </ul>
        </nav>

        <div class="HeaderCtas">
          <a class="HeaderCtaLine" href="#">
            <span class="HeaderCtaLineIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/line-icon.webp" alt="" width="47" height="45">
            </span>
            <span class="HeaderCtaLineText">LINEで相談する</span>
          </a>
          <a class="HeaderCtaReserve" href="#">
            <span class="HeaderCtaReserveIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/sp-icon.webp" alt="" width="52" height="52">
            </span>
            <span class="HeaderCtaReserveText">初回予約をする</span>
          </a>
        </div>
      </div>

      <button class="HeaderHamburger" type="button" aria-controls="HeaderEnd" aria-expanded="false" aria-label="メニュー">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
