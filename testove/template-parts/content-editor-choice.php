<?php
if (!empty($args['title']) && !empty($args['posts']) && is_array($args['posts'])) { ?>
  <div class="flex flex-col grid-cols-1 col-span-4 md:grid xl:flex md:grid-cols-2 xl:grid-cols-1">
    <div class="col-span-2 text-[28px] font-bold pb-9 font-argandir text-neutral-900 leading-[35px]">
      <?php echo $args['title']; ?>
    </div>

    <?php
    foreach ($args['posts'] as $post_obj) {
      get_template_part('template-parts/content', 'post-card-simple', $post_obj);
    }
    ?>
  </div>
<?php
}
?>
