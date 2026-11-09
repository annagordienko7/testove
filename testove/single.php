<?php get_header(); ?>

<div id="header-single" class="mx-[12px] mt-[12px]">
    <?php if (have_posts()) : ?>

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', 'single'); ?>
        
        <?php endwhile; ?>

    <?php endif; ?>
</div>
<!-- <section class="pb-32">
    <div class="container ">
        <div class="text-center font-bold text-xxl leading-[2.8125rem] pb-12">
            <?php //_e('Recent insights', 'quidget') ?>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php //$posts = get_posts(['numberposts' => 3]);

            //foreach ($posts as $post) {
                //get_template_part('template-parts/content', 'post-card', $post);
            //}
            ?>
        </div>
    </div>
</section> -->

<section class="mx-[12px] rounded-[36px] bg-gradient-to-r from-[#1F2232] to-[#111322] mb-[100px] px-[43px] lg:px-[53px] py-[100px] text-neutral-25 mt-3 flex flex-col items-center">
    <img loading="lazy" width="84" height="84" src="<?php echo get_template_directory_uri() . '/resources/img/landing/quidget.webp' ?>" srcset="<?php echo get_template_directory_uri() . '/resources/img/landing/quidget2x.webp' ?>" alt="Quidget">
    <div class="text-center text-[36px] leading-[43.2px] lg:text-[42px] font-bold lg:leading-[46.2px] font-argandir lg:max-w-[100%] max-w-[300px]">
        Save hours every month in just a few clicks
    </div>
    <div class="flex justify-center w-full gap-3 mt-12 lg:w-auto ">
        <a class="w-full text-center bg-gradient-to-t from-[#2970FE] to-[#155DEE] hover:bg-gradient-to-t hover:from-[#518BFF] hover:to-[#3A7CFE] border border-[rgba(255,255,255,0.10)] py-[14px] px-[46px] rounded-[10px] shadow-[0px_1px_2px_0px_rgba(160,176,195,0.20)] text-primary-25" href="<?php echo get_quidget_environment()['app'] ?>sign-up">
            Build your AI Agent
        </a>
    </div>
</section>
<?php
get_footer();
