<?php
if (!empty($args)) {
    $cat = wp_get_post_terms($args->ID, 'category', array('exclude' => '1', 'hide_empty' => true));
    if (empty($cat)) {
        $cat_name = 'All';
    } else {
        $cat_name = $cat[0]->name;
    }
?>
    <a href="<?php echo get_permalink($args) ?>" class="block p-3 bg-white border rounded-[36px] border-neutral-200-60">
        <?php echo get_the_post_thumbnail($args->ID, 'post-card', ['loading' => 'lazy', 'class' => 'rounded-[24px] w-full']); ?>
        <div class="px-8 py-10">
            <div class="pb-[14px] text-sm text-neutral-700 leading-[21px] text-[14px] font-sans font-normal">
                <?php echo get_the_date('l, F j, Y', $post) ?>
            </div>
            <div class="text-[18px] font-semibold leading-[27px] text-neutral-800 font-sans mb-4">
                <?php echo $args->post_title; ?>
            </div>
            <div class="font-sans font-normal text-[15px] leading-[22.5px] text-neutral-500">
                <?php echo custom_the_excerpt($args->ID, 112, ''); ?>
            </div>
        </div>
    </a>
<?php } ?>
