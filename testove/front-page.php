<?php /* Template Name: Landing Page */ ?>

<?php
get_header(); 
get_template_part( 'blocks/block', 'hero' ); 

get_template_part( 'blocks/block', 'features' ); 

get_template_part( 'blocks/block', 'split' ); 
get_template_part( 'blocks/block', 'callback' ); 

get_template_part( 'blocks/block', 'contacts' ); 
get_template_part( 'blocks/block', 'faq' ); 

?>
<?php
get_footer(); 
