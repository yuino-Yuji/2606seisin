<?php
// 店舗情報 ACF（group_6a2a2142ed427.json）から固定ページ「トップ」(ID=7) のフィールドを取得
$store_page_id = 7;
$store_info = [
  ['label' => '住所',     'value' => (string) get_field('store_address', $store_page_id)],
  ['label' => 'アクセス', 'value' => (string) get_field('store_access',  $store_page_id)],
  ['label' => '営業時間', 'value' => (string) get_field('store_time',    $store_page_id)],
  ['label' => '定休日',   'value' => (string) get_field('store_closed',  $store_page_id)],
  ['label' => '予約方法', 'value' => (string) get_field('store_reserve', $store_page_id)],
  ['label' => '電話番号', 'value' => (string) get_field('store_tel',     $store_page_id)],
];
?>
<footer class="Footer" id="Footer">
  <div class="FooterInner">
    <div class="FooterLogo">
      <span class="FooterLogoImage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/header-logo.webp" alt="Sakura - BODY MAINTENANCE SALON -" width="165" height="79">
      </span>
    </div>
    <dl class="FooterInfoList">
      <?php foreach ($store_info as $item) : ?>
        <div class="FooterInfoItem">
          <dt class="FooterInfoLabel"><?php echo esc_html($item['label']); ?></dt>
          <dd class="FooterInfoValue"><?php echo esc_html($item['value']); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
