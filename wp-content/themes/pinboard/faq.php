<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>
	

    <?php //get_template_part( 'about-slideshow' ); ?>


	<div id="container">
		<section id="content">
		<ul class="about-content">
		<?php $slide = new WP_Query( array( 'post_type' => 'faq' ) ); ?>
	<?php if( $slide->have_posts() ) : ?>
	<?php
        $i=1;
		while ($slide->have_posts())
		: $slide->the_post();
?>
<li class="faq-item">
<div class="title"><?php the_title()?></div>
<div class="content" style="display:none;"><?php the_content()?></div>

</li>
<?php
       $i++;
        endwhile; ?>
     <?php endif; ?>
     
     </ul>
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>