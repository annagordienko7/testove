<?php if (!empty($args)) { ?>
    <div class="relative grid grid-cols-1 py-10 border-b border-b-gray-100 first:border-t first:border-t-gray-200 max-sm:gap-3 sm:grid-cols-3">
        <div>
            <div class="text-sm/5 max-sm:text-gray-700 sm:font-medium">
                <?php echo get_the_date('l, F j, Y', $post) ?>
            </div>
            <div class="mt-2.5 flex items-center gap-3">
                <img alt="<?php echo get_authors_name(); ?>" src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => 96]); ?>" class="object-cover rounded-full aspect-square size-6">
                <div class="text-gray-700 text-sm/5">
                    <?php echo get_authors_name(); ?>
                </div>
            </div>
        </div>
        <a class="sm:col-span-2 sm:max-w-2xl" href="<?php echo get_permalink($post); ?>">
            <h2 class="font-medium text-sm/5">
                <?php echo $args->post_title; ?>
            </h2>
            <p class="mt-3 text-gray-500 text-sm/6">
                <?php echo custom_the_excerpt($args->ID, 112, ''); ?>
            </p>
            <div class="mt-4">
                <span class="flex items-center gap-1 font-medium text-sm/5">
                    Read more<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 fill-gray-400">
                        <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd">
                        </path>
                    </svg>
                </span>
            </div>
        </a>
    </div>
<?php } ?>
