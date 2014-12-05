<?php
/*
Template Name: Product
*/
?>
<?php get_header(); ?>
	

    <?php get_template_part( 'about-slideshow' ); ?>


	<div id="container">
		<section id="content">
		<div class="product-content">
		<header class="entry-header">
						Our Products
						</header>
		<div id="product-slide">
		<?php $slide = new WP_Query( array( 'post_type' => 'product' ) ); ?>
	<?php if( $slide->have_posts() ) : ?>
	<?php
        $i=1;
		while ($slide->have_posts())
		: $slide->the_post();
		$des = wp_trim_words( get_the_excerpt(), 19, '' );
?>
<?php if( has_post_thumbnail() ) : ?>
	    <div class="item">
	    <div class="img">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail( 'product-thumb' ); ?>
		</a>
		
		</div>
	    <div class="description"><?php print $des; ?></div>
	    
	    </div>
	    <?php endif; ?>
 <?php
       $i++;
        endwhile; ?>
     <?php endif; ?>
     
     </div>
     </div>
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>