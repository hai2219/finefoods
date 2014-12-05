<?php get_header(); ?>
	<div id="container">
		<section id="content" class="content-product-details">
		<div class="product-details">
		<header class="entry-header">
						Product Details
						</header>
			<?php if( have_posts() ) : the_post(); 
			$id = get_the_ID();
            $note = get_post_meta($id, 'note', true);
			?>
				    
					
						<div class="img-detail">
						<?php the_post_thumbnail( 'product-thumb' ); ?>
						</div>
						<div class="content-detail">
							<div class="title">
							<?php the_title(); ?>
							</div>
							<div class="note"><?php print $note;?></div>
							<div class="content">
							<?php the_content(); ?>
							</div>
						</div>

					
					

				
			

			<?php endif; ?>
			</div><!-- .entry -->
		</section><!-- #content -->
		
	</div><!-- #container -->
<?php get_footer(); ?>