<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
	

    <?php get_template_part( 'about-slideshow' ); ?>


	<div id="container">
		<section id="content">
		<div class="about-content">
		<?php if( have_posts() ) : the_post(); ?>
		
						<header class="entry-header">
						<?php the_title(); ?>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php the_content(); ?>
							<div class="clear"></div>
						</div><!-- .entry-content -->
		<?php endif; ?>
     
     </div>
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>