<?php
if (!empty($args['post'])) {
  $post_obj = $args['post'];
  $cat = wp_get_post_terms($post_obj->ID, 'category', array('exclude' => '1', 'hide_empty' => true))[0];
?>
  <div class="col-span-8 mb-12 overflow-hidden border rounded-xl border-neutral-200-60">
    <a href="<?php echo get_permalink($post_obj) ?>" aria-label="Featured Post Image">
      <?php echo get_the_post_thumbnail($post_obj, 'featured-post', ['class' => 'w-full', 'loading' => 'lazy']); ?>
    </a>

    <div class="p-12">
      <div class="pb-6 text-sm uppercase text-neutral-600 leading-[17.5px] tracking-[1.4px]">
        <a href=<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a> - <?php echo the_reading_time($post_obj->post_content) ?>
      </div>
      <a href="<?php echo get_permalink($post_obj) ?>">
        <h2 class="pb-6 text-[32px] text-neutral-900 leading-[40px] font-argandir font-bold">
          <?php echo $post_obj->post_title; ?>
        </h2>
      </a>
      <a class="flex flex-row text-sm text-neutral-900 leading-[17.5px] font-medium items-center" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <div class="mr-4 overflow-hidden rounded-full">
          <?php echo get_avatar(get_the_author_meta('ID'), 34); ?>
        </div>
        <?php echo get_authors_name(); ?>
      </a>
    </div>
  </div>
<?php
} else {
  echo 'Nothing to show. Pick a post.';
}
?>
