<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php /*
  <title><?php bloginfo('name'); ?></title>
  */ ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="">
  <meta name="robots" content="noindex">
  <meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <meta property="og:url" content="<?php echo home_url('/'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:locale" content="ja_JP">
  <?php
    if ( is_front_page() || is_home() ) {
      echo '<link rel="canonical" href="' . esc_url( home_url( '/' ) ) . '">';
    } else {
      echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '">';
    }
  ?>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="HeaderWrapper">
      <?php if (is_front_page() || is_home()) : ?>
        <h1 class="HeaderTopLogo">
      <?php else : ?>
        <div class="HeaderTopLogo">
      <?php endif; ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <picture class="HeaderTopLogo__Icon">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/top/header-logo.png" media="(min-width:768px)" />
            <img src="" alt="結のデザイン事務所">
          </picture>
        </a>
      <?php if (is_front_page() || is_home()) : ?>
        </h1>
      <?php else : ?>
        </div>
      <?php endif; ?>
      <nav id="NavContent" class="HeaderNav">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">サービス</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">事例紹介</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">企業情報</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">お役立ち情報</a></li>
          <li><a class="HeaderDocumentLink" href="<?php echo esc_url(home_url('/')); ?>">資料請求</a></li>
          <li><a class="HeaderContactLink" href="<?php echo esc_url(home_url('/')); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
      <button id="NavOpenBtn" class="HamburgerBtn sp">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
