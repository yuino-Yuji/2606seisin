<div class="SinglePageNav">
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  ?>
  <div class="SinglePageNavBtn SinglePageNavBtn--prev">
    <?php if ($prev_post): ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="SinglePageNavBtn__prev">
        前へ戻る
      </a>
      <?php else: ?>
        <span class="SinglePageNavBtn__prev is-disabled">前へ戻る</span>
    <?php endif; ?>
  </div>
  <div class="SinglePageNavBtn SinglePageNavBtn--archive">
    <?php
    $archive_url = get_post_type_archive_link(get_post_type());
    if (!$archive_url) {
        $archive_url = home_url('/');
    }
    ?>
    <a class="SinglePageNavBtn__archive" href="<?php echo esc_url($archive_url); ?>">一覧へ戻る</a>
  </div>
  <div class="SinglePageNavBtn SinglePageNavBtn--next">
    <?php if ($next_post): ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="SinglePageNavBtn__next">
        次へ進む
      </a>
      <?php else: ?>
        <span class="SinglePageNavBtn__next is-disabled">次へ進む</span>
    <?php endif; ?>
  </div>
</div>
