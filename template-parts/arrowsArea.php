<div class="ArrowsArea">
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  ?>
  <?php if ($prev_post) : ?>
    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="PrevNavi">前の記事を読む</a>
  <?php else : ?>
    <p class="PrevNavi PrevNavi__p">前の記事を読む</p>
  <?php endif; ?>
  <?php if ($next_post) : ?>
    <a href="<?php echo get_permalink($next_post->ID); ?>" class="NextNavi">次の記事を読む</a>
  <?php else : ?>
    <p class="NextNavi NextNavi__p">次の記事を読む</p>
  <?php endif; ?>
</div>