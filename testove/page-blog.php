<?php /* Template Name: Blog Page */ ?>

<?php
get_header();
$all_fields = get_fields();
?>
<div class="container flex flex-col items-center justify-between py-12 text-center xl:pl-12 xl:pb-0 xl:pt-12 xl:flex-row-reverse">
    <div class="flex flex-col items-center pt-12">
        <img alt="Big Quidget Logo" style="margin-bottom: -1.25rem; max-width: 228px;" src="<?php echo get_template_directory_uri() . '/resources/img/big_quidget_logo.svg'; ?>">
        <img alt="Big Quidget Logo Blur" class="w-full" style="max-width: 492px" src="<?php echo get_template_directory_uri() . '/resources/img/big_quidget_logo_blur.jpg'; ?>">
    </div>
    <div class="xl:w-1/2">
        <div class="font-bold not-italic leading-[65px] text-xxxl xl:text-left font-argandir text-neutral-900 mb-6">
            <?php _e('Welcome to our blog', 'quidget'); ?>
        </div>
        <div class="text-neutral-600 text-[18px] leading-[27px] xl:text-left">
            <?php _e('Stories, insights, and advices that will revolutionize your approach to crafting and developing chatbots.', 'quidget'); ?>
        </div>
    </div>
</div>
</section>
<section class="py-32">
    <div class="container">
        <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-28">
            <?php
            if ($all_fields['pick_a_post']) {
                get_template_part('template-parts/content', 'featured-post-block', ['post' => $all_fields['pick_a_post']]);
            }
            ?>

            <?php
            if (!empty($all_fields['editors_choice']['editors_choice_posts'])) {
                $args = [
                    'posts' => $all_fields['editors_choice']['editors_choice_posts'],
                    'title' => $all_fields['editors_choice']['editors_choice_title'],
                ];

                get_template_part('template-parts/content', 'editor-choice', $args);
            }
            ?>
        </div>
    </div>
</section>

<section class="pb-32">
    <div class="container ">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php $posts = get_posts(['numberposts' => 3, 'category' => $all_fields['3_latest_posts']]);

            foreach ($posts as $post) {
                get_template_part('template-parts/content', 'post-card', $post);
            }
            ?>
        </div>
    </div>
</section>

<section class="py-20 border-y border-neutral-100 bg-neutral-50">
    <div class="container">
        <?php if (isset($all_fields['recent_news_category'])) { ?>
            <div class="pb-16 font-bold text-xxl leading-[45px] text-center text-neutral-900 font-argandir">
                <?php _e('Recent news', 'quidget'); ?>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 xl:gap-8">
                <?php
                $recent_posts = get_posts([
                    'category' => $all_fields['recent_news_category'],
                    'numberposts' => 4
                ]);

                foreach ($recent_posts as $post) {
                    get_template_part('template-parts/content', 'post-card-simple', $post);
                }
                ?>
            </div>
        <?php } ?>
    </div>
</section>

<section class="container py-32">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
        <?php
        $two_latest_posts = get_posts(['numberposts' => 2, 'category' => ($all_fields['2_latest_posts'] ?? null)]);
        foreach ($two_latest_posts as $post) {
            get_template_part('template-parts/content', 'post-card-big', $post);
        } ?>
    </div>
</section>

<section class="container pb-32">
    <div class="rounded-xl">
        <?php echo do_shortcode('[contact-form-7 id="82d91bc" title="Subscription"]'); ?>
    </div>
</section>

<?php
get_footer();
