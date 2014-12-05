<div id="page-slideshow-opacity"></div>
<div id="home-slide" class="owl-carousel owl-theme">
     <?php $slide = new WP_Query( array( 'post_type' => 'page_slideshow','orderby' => 'date', 'order' => 'DESC' ) ); ?>
	<?php if( $slide->have_posts() ) : ?>
	<?php
while ($slide->have_posts())
	: $slide->the_post();
$id = get_the_ID();
$image_id = get_post_meta($id, 'image', true);
$file = wp_get_attachment_metadata($image_id);
//print_r($file);
$image = '';
if (isset ($file['file'])) {
	$image = get_bloginfo('home') . '/wp-content/uploads/' . $file['file'];
?>
    <div class="item"><img src="<?php print $image?>" alt=""></div>
     <?php } endwhile; ?>
     <?php endif; ?>
     
    </div>
    