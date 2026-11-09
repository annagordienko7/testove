<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
            'mobile' => __('mobile Menu', 'tailpress'),
            'signin' => __('Sign In Menu', 'tailpress'),
            'resources' => __('Resources Menu', 'tailpress'),
            'сompany' => __('Сompany Menu', 'tailpress'),
            'solutions' => __('Solutions Menu', 'tailpress'),
            'comparisons' => __('Comparisons Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);




/**
 * Estimated reading time
 *
 * @return string Estimated time to read
 */
function the_reading_time($content)
{
    // $content = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " min to read";
    } else {
        $timer = " min to read";
    }

    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

add_filter('wpcf7_autop_or_not', '__return_false');




function get_authors_name()
{
    $full_name = get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');

    if (empty(trim($full_name))) {
        echo get_the_author_meta('display_name');
    }

    echo $full_name;
}

add_action('after_setup_theme', 'add_custom_image_sizes');

function add_custom_image_sizes()
{
    add_image_size('featured-post-retina', 1628, 746, true);
    add_image_size('post-card-retina', 760, 398, true);
    add_image_size('post-card-big-regina', 1170, 522, true);
    add_image_size('post-image-retina', 1170, 720, true);
}

// This will remove the default image sizes and the medium_large size.
add_filter('intermediate_image_sizes_advanced', 'prefix_remove_default_images');

function prefix_remove_default_images($sizes)
{
    unset($sizes['small']); // 150px
    unset($sizes['medium']); // 300px
    unset($sizes['large']); // 1024px
    unset($sizes['medium_large']); // 768px
    return $sizes;
}

remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
add_action('wpcf7_init', 'my_add_form_tag_submit', 10, 0);

function my_add_form_tag_submit()
{
    wpcf7_add_form_tag('submit', 'my_submit_form_tag_handler');
}

function my_submit_form_tag_handler($tag): string
{
    $tag_value = $tag->values[0];
    $tag_options = $tag->options;

    $atts = "";
    $classes = "wpcf7-form-control wpcf7-submit has-spinner";

    foreach ($tag_options as $tag_option) {
        list($name, $value) = explode(':', $tag_option);
        if ($name == 'class') {
            $classes .= ' ' . $value;
        } else {
            $atts .= "$name=\"$value\" ";
        }
    }
    $atts .= "class=\"$classes\"";

    return sprintf(
        '<button type="submit" %1$s >%2$s<span class="loader"></span></button>',
        $atts,
        $tag_value
    );
}

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles()
{
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);


function custom_excerpt_length($text, $length = 112, $more = '...')
{
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length);
        $text = substr($text, 0, strrpos($text, ' '));
        $text .= $more;
    }
    return $text;
}

function custom_the_excerpt($post_id = null, $length = 112)
{
    global $post;
    
    // Якщо передано ID, беремо конкретний пост, якщо ні — поточний у циклі
    $current_post = $post_id ? get_post($post_id) : $post;
    
    if (!$current_post) {
        return '';
    }

    // Перевіряємо, чи є вручну заповнений уривок, якщо ні — беремо контент
    $excerpt = $current_post->post_excerpt ? $current_post->post_excerpt : $current_post->post_content;
    
    // Очищаємо від шорткодів та тегів (БЕЗ apply_filters('the_content'))
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = str_replace(']]>', ']]&gt;', $excerpt);
    
    // Обрізаємо за кількістю слів безпечно
    $excerpt = wp_trim_words($excerpt, $length, '...');
    
    return custom_excerpt_length($excerpt, $length);
}
