  <?php
/**
 * パンくずリスト テンプレートパーツ
 */

if (is_front_page()) return;
?>
<nav aria-label="パンくずリスト" class="Breadcrumb">
  <ol class="Breadcrumb_List <?php if(is_page('privacy') || is_page('contact') || is_404() || is_page('contact-thanks')) echo 'Breadcrumb_List--white'; ?>">
    <li class="Breadcrumb_Item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>

    <?php if (is_category()) :
      $cat = get_queried_object();
      if ($cat->parent != 0) :
        $ancestors = array_reverse(get_ancestors($cat->term_id, 'category'));
        foreach ($ancestors as $ancestor) : ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_category_link($ancestor)); ?>"><?php echo esc_html(get_cat_name($ancestor)); ?></a></li>
        <?php endforeach;
      endif; ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php echo esc_html($cat->name); ?></li>

    <?php elseif (is_tag()) : ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php single_tag_title(); ?></li>

    <?php elseif (is_tax()) :
      $term = get_queried_object();
      $taxonomy = get_taxonomy($term->taxonomy);
      if (!empty($taxonomy->object_type)) :
        $post_type = $taxonomy->object_type[0];
        $post_type_obj = get_post_type_object($post_type);
        if ($post_type_obj && $post_type_obj->has_archive) : ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>"><?php echo esc_html($post_type_obj->labels->name); ?></a></li>
        <?php endif;
      endif;
      if ($term->parent != 0) :
        $ancestors = array_reverse(get_ancestors($term->term_id, $term->taxonomy));
        foreach ($ancestors as $ancestor) :
          $ancestor_term = get_term($ancestor, $term->taxonomy); ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_term_link($ancestor_term)); ?>"><?php echo esc_html($ancestor_term->name); ?></a></li>
        <?php endforeach;
      endif; ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php echo esc_html($term->name); ?></li>

    <?php elseif (is_single()) :
      $post_type = get_post_type();
      if ($post_type !== 'post') :
        $post_type_obj = get_post_type_object($post_type);
        if ($post_type_obj->has_archive) : ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>"><?php echo esc_html($post_type_obj->labels->name); ?></a></li>
        <?php endif;
        $taxonomies = get_object_taxonomies($post_type, 'objects');
        foreach ($taxonomies as $tax_slug => $tax_obj) :
          if ($tax_obj->hierarchical) :
            $terms = get_the_terms(get_the_ID(), $tax_slug);
            if ($terms && !is_wp_error($terms)) :
              $term = $terms[0];
              if ($term->parent != 0) :
                $ancestors = array_reverse(get_ancestors($term->term_id, $tax_slug));
                foreach ($ancestors as $ancestor) :
                  $ancestor_term = get_term($ancestor, $tax_slug); ?>
                  <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_term_link($ancestor_term)); ?>"><?php echo esc_html($ancestor_term->name); ?></a></li>
                <?php endforeach;
              endif; ?>
              <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></li>
              <?php break;
            endif;
          endif;
        endforeach;
      else :
        $categories = get_the_category();
        if ($categories) :
          $cat = $categories[0];
          if ($cat->parent != 0) :
            $ancestors = array_reverse(get_ancestors($cat->term_id, 'category'));
            foreach ($ancestors as $ancestor) : ?>
              <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_category_link($ancestor)); ?>"><?php echo esc_html(get_cat_name($ancestor)); ?></a></li>
            <?php endforeach;
          endif; ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a></li>
        <?php endif;
      endif; ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php the_title(); ?></li>

    <?php elseif (is_page()) :
      global $post;
      if ($post->post_parent) :
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        foreach ($ancestors as $parent_id) : ?>
          <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_permalink($parent_id)); ?>"><?php echo esc_html(get_the_title($parent_id)); ?></a></li>
        <?php endforeach;
      endif; ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php the_title(); ?></li>

    <?php elseif (is_post_type_archive()) :
      $post_type_obj = get_queried_object(); ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php echo esc_html($post_type_obj->labels->name); ?></li>

    <?php elseif (is_search()) : ?>
      <li class="Breadcrumb_Item" aria-current="page">「<?php echo get_search_query(); ?>」の検索結果</li>

    <?php elseif (is_404()) : ?>
      <li class="Breadcrumb_Item" aria-current="page">404</li>

    <?php elseif (is_page('contact-thanks')) : ?>
      <li class="Breadcrumb_Item" aria-current="page">お問い合わせ完了</li>

    <?php elseif (is_author()) : ?>
      <li class="Breadcrumb_Item" aria-current="page"><?php the_author(); ?></li>

    <?php elseif (is_date()) :
      if (is_year()) : ?>
        <li class="Breadcrumb_Item" aria-current="page"><?php the_time('Y年'); ?></li>
      <?php elseif (is_month()) : ?>
        <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_year_link(get_the_time('Y'))); ?>"><?php the_time('Y年'); ?></a></li>
        <li class="Breadcrumb_Item" aria-current="page"><?php the_time('n月'); ?></li>
      <?php elseif (is_day()) : ?>
        <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_year_link(get_the_time('Y'))); ?>"><?php the_time('Y年'); ?></a></li>
        <li class="Breadcrumb_Item"><a href="<?php echo esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))); ?>"><?php the_time('n月'); ?></a></li>
        <li class="Breadcrumb_Item" aria-current="page"><?php the_time('j日'); ?></li>
      <?php endif;
    endif; ?>
  </ol>
</nav>
