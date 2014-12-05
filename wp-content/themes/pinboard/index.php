<?php get_header(); ?>
	

    <?php get_template_part( 'home-slideshow' ); ?>


	<div id="container">
		<section id="home-content">
		<div class="home-product">
			  <?php $slide = new WP_Query( array( 'post_type' => 'product','posts_per_page'=>'2'  ) ); ?>
	<?php if( $slide->have_posts() ) : ?>
	<?php
        $i=1;
		while ($slide->have_posts())
		: $slide->the_post();
?>
<div class="product-item product-item-<?php print $i; ?>">
<?php if( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail( 'product-thumb' ); ?>
		</a>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="see-more"><a href="<?php the_permalink(); ?>" ><img src="<?php print get_template_directory_uri() ?>/images/see-more.jpg"/></a></div>
	<?php endif; ?>
</div>	
    
       <?php
       $i++;
        endwhile; ?>
     <?php endif; ?> 
     </div>
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>