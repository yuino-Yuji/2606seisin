<div class="PageNumBox">
  <?php
  if ($wp_query->max_num_pages > 1) {
    echo paginate_links(array(
      'prev_next' => false,
      'total' => $wp_query->max_num_pages,
      'current' => max(1, get_query_var('paged')),
      'end_size' => 1,
      'mid_size' => 1
    ));
  } else {
    echo '<span aria-current="page" class="page-numbers current">1</span>';
  }
  ?>
</div>