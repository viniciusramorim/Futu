<?php
/**
 * template-home.php
 *
 * Template Name: Full Width Template
 * Template Post Type: page,ts_service,product
 */

   $post_type = get_post_type();

   get_header(); 
   if( $post_type == "ts_service" && is_single()):
      get_template_part( 'template-parts/banner/content', 'banner-service' );
   else:
      get_template_part( 'template-parts/banner/content', 'banner-page' );
   endif;   


 // calling title part from blog dir
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('home-full-width-content');?> role="main">
    <div class="builder-content">
		<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		<?php endwhile; ?>
    </div> <!-- end main-content -->
</div> <!-- end main-content -->
<?php get_footer(); ?>