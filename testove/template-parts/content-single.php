	<header class="flex pt-2 pb-12 sm:pt-12 md:pb-24 md:pb-[50px] md:py-24 xl:pb-[50px]">
		<div class="flex flex-col items-center justify-center w-full">
			<time class="flex bg-white rounded-full shadow-picker text-[14px] gap-[10px] py-2 px-[18px] mt-[90px] md:mt-[67px] mb-[8px] border border-neutral-100">
			<?php echo get_the_date('l, F j, Y'); ?>
			</time>

			<h1 class="leading-[2.8125rem] text-4xl sm:text-[42px] font-argandir container text-center">
				<?php the_title() ?>
			</h1>
		</div>
	</header>
	</section>
	<article id="post-<?php the_ID(); ?>" <?php post_class('pb-10 xl:pb-10 grid lg:grid-cols-[18.2%_57.4%_17.2%] container max-w-6xl mx-auto gap-8 lg:gap-[41px]'); ?>>
		<?php if (is_active_sidebar('left_post_sidebar')) { ?>

			<div>
				<?php dynamic_sidebar('left_post_sidebar'); ?>
			</div>
		<?php } ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<div class="mt-10">
  <a class="inline-flex back items-center justify-center p-[6px_18px_6px_18px] rounded-[8px] border border-[var(--borders-default,rgba(239,241,245,1))]  ring-black/10 whitespace-nowrap text-[13px] font-medium text-gray-950 data-[disabled]:bg-transparent data-[hover]:bg-gray-50 data-[disabled]:opacity-40" 
     data-headlessui-state="" href="/blog">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4">
      <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
    </svg>
    Back to blog
  </a>
</div>

		</div>
		<?php if (is_active_sidebar('right_post_sidebar')) { ?>
			<div class="w-full">
				<div class="mt-2.5 flex items-center gap-3">
					<img alt="<?php echo get_authors_name(); ?>" src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => 96]); ?>" class="object-cover rounded-full aspect-square size-6">
					<div class="text-gray-700 text-sm/5">
						<?php echo get_authors_name(); ?>
					</div>
				</div>
				<div class="flex gap-3 mt-[37.5px]">
					<?php
					$categories = wp_get_object_terms(get_the_ID(), 'category');

					foreach ($categories as $category) {
						echo '<a href="' . get_category_link($category->term_id) . '" class="px-4 py-2 rounded-[26px] text-[14px] text-neutral-500 font-medium border border-dashed border-neutral-200 bg-neutral-25">' . $category->name . '</a>';
					}
					?>
				</div>
				<?php dynamic_sidebar('right_post_sidebar'); ?>
			</div>
		<?php } ?>
	</article>
