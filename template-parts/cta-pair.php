<?php
/**
 * CTA 2 ボタンセット（LINE で相談する / 初回予約をする）
 *
 * カンプ：SP Concept 末尾、Closing 末尾、Footer 上などで複数回使い回される 2 ボタンセット。
 * デフォルトの遷移先は仮置きの '#'。CMS 連動またはサブテーマで上書き想定。
 */

$line_href    = $args['line_href']    ?? '#';
$reserve_href = $args['reserve_href'] ?? '#';
?>

<ul class="CtaPair">
  <li class="CtaPair__Item">
    <a class="CtaButton CtaButton--line" href="<?php echo esc_url($line_href); ?>">
      <span class="CtaButton__Icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/line-icon.webp" alt="" width="47" height="45">
      </span>
      <span class="CtaButton__Text">LINEで相談する</span>
    </a>
  </li>
  <li class="CtaPair__Item">
    <a class="CtaButton CtaButton--reserve" href="<?php echo esc_url($reserve_href); ?>">
      <span class="CtaButton__Icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/reserve-icon.webp" alt="" width="40" height="52">
      </span>
      <span class="CtaButton__Text">初回予約をする</span>
    </a>
  </li>
</ul>
