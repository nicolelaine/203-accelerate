<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 * get query parameter below
 * <pre><?php print_r($wp_query); exit; ?></pre>
 */



get_header(); ?>
	<div id="primary" class="home-page hero-content">

	<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->


	<!-- RECENT BLOG POST -->
		<section class="recent-posts">
            <div class="site-content">
  <div class="blog-post">
   <h4>From the Blog</h4>
    <?php query_posts('posts_per_page=1'); ?>
     <?php while ( have_posts() ) : the_post(); ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <?php the_excerpt(); ?> 
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
   </div>
 </div>
</section>
		
	
<?php get_footer(); ?>
