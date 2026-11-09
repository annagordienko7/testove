<?php
if (!empty($args)) {
    $cat = wp_get_post_terms($args->ID, 'category', array('exclude' => '1', 'hide_empty' => true));
    if (empty($cat)) {
        $cat_name = 'All';
    } else {
        $cat_name = $cat[0]->name;
    }
?>
    <a href="<?php echo get_permalink($args) ?>" class="pb-8">
        <div class="pb-3 text-sm uppercase text-neutral-600 leading-[17.5px] tracking-[1.4px]">
            <?php echo ($cat_name . ' - ' . the_reading_time($args->post_content)) ?>
        </div>
        <div class="font-semibold text-md text-neutral-900 leading-[28px]">
            <?php echo $args->post_title ?>
        </div>
    </a>
<?php } ?>
