<?php
if (!empty($args)) {
    $cat = wp_get_post_terms($args->ID, 'category', array('exclude' => '1', 'hide_empty' => true));
    if (empty($cat)) {
        $cat_name = 'All';
    } else {
        $cat_name = $cat[0]->name;
    }
?>
    <a href="<?php echo get_permalink($args) ?>" class="overflow-hidden border rounded-xl border-neutral-200-60">
        <?php echo get_the_post_thumbnail($args->ID, 'post-card', ['loading' => 'lazy']); ?>
        <div class="px-8 py-10">
            <div class="pb-6 text-sm uppercase text-neutral-600 leading-[17.5px] tracking-[1.4px]">
                <?php echo $cat_name; ?> - <?php echo the_reading_time($args->post_content) ?>
            </div>
            <div class="text-[26px] font-bold leading-[32.5px] font-argandir text-neutral-900">
                <?php echo $args->post_title; ?>
            </div>
        </div>
    </a>
<?php } ?>
