<?php get_header(); ?>
<div class="pb-20">
	<?php if (is_category()) { ?>
		<!-- Category page content -->

		<div class="mt-10 text-[1.125rem] text-neutral-600 text-center">
			<?php _e('Category', 'quidget') ?>
		</div>
		<h1 class="text-[2.25rem] font-bold text-neutral-900 font-argandir text-center">
			<?php single_cat_title(); ?>
		</h1>

		<?php if (have_posts()) : ?>
			<div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-auto my-[60px] gap-x-[1.875rem] gap-y-9">
				<?php
				while (have_posts()) :
					the_post(); ?>
					<?php get_template_part('template-parts/content', 'post-card', get_post()); ?>
				<?php endwhile; ?>
			</div>
			<div class="container pb-[60px]">
				<?php wds_pagination(); ?>
			</div>
		<?php endif; ?>

	<?php } elseif (is_author()) { ?>
		<!-- Author page content -->
		<div class="container grid grid-cols-1 px-12 xl:grid-cols-4">
			<div class="flex justify-center p-0 xl:pl-7 xl:justify-start">
				<?php echo get_avatar(get_the_author_meta('ID'), 180, null, null, ['class' => 'rounded-full']); ?>
			</div>
			<div class="flex flex-col items-center col-span-3 py-5 xl:items-start">
				<div class="text-[1.125rem] text-neutral-600 leading-[1.6875rem]">
					<?php _e('Author', 'quidget'); ?>
				</div>
				<h1 class="font-semibold text-xxl font-argandir text-neutral-900 leading-[2.8125rem]">
					<?php get_authors_name(); ?>
				</h1>
			</div>
		</div>

		<?php if (have_posts()) : ?>
			<div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-auto my-[60px] gap-x-[1.875rem] gap-y-9">
				<?php
				while (have_posts()) :
					the_post(); ?>
					<?php get_template_part('template-parts/content', 'post-card', get_post()); ?>
				<?php endwhile; ?>
			</div>
			<div class="container pb-[60px]">
				<?php wds_pagination(); ?>
			</div>
		<?php endif; ?>

		<div class="container">
			<div class="rounded-xl mb-[120px]">
				<?php echo do_shortcode('[contact-form-7 id="82d91bc" title="Subscription"]'); ?>
			</div>
		</div>

	<?php } else { ?>
		<!-- Other pages content -->
		<div class="container mx-auto my-8">
			<?php if (have_posts()) : ?>

				<?php
				while (have_posts()) :
					the_post();
				?>

					<?php get_template_part('template-parts/content', 'page'); ?>


				<?php endwhile; ?>

			<?php endif; ?>
		</div>

	<?php } ?>
</div>

<?php
get_footer();
