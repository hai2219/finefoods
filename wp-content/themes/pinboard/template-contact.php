<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
	

    <?php //get_template_part( 'about-slideshow' ); ?>


	<div id="container">
		<section id="content">
		<div class="contact-content">
		<header class="entry-header">
						<?php the_title(); ?>
						</header><!-- .entry-header -->
		<?php
		$address = '';
		
		?>
		 <?php $slide = new WP_Query( array( 'post_type' => 'contact_google_map' ) ); ?>
	<?php if( $slide->have_posts() ) : ?>
	<?php
        
		while ($slide->have_posts())
		: $slide->the_post();
        
        $address = get_the_title(); 
    
        endwhile; ?>
     <?php endif; ?> 
		<div id="map-canvas" class="map"><img src="<?php //print get_template_directory_uri() ?>/images/map.jpg" /></div>
		<div class="content">
		<?php if( have_posts() ) : the_post(); ?>
						
						<div class="entry-content">
							<?php the_content(); ?>
							<div class="clear"></div>
						</div><!-- .entry-content -->
		<?php endif; ?>
       </div>
       <div class="contact-form">
       <?php print do_shortcode('[contact-form-7 id="31" title="Contact form 1"]');?>
       </div>
     </div>
     
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>


var geocoder;
var map;
var query = '<?php print $address; ?>';
function initialize() {
  geocoder = new google.maps.Geocoder();
  var mapOptions = {
    zoom:8
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  codeAddress();
}

function codeAddress() {
  var address = query;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var image = '<?php print get_template_directory_uri() ?>/images/point.png';
      var marker = new google.maps.Marker({
          map: map,
          icon: image,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);



    </script>
	
<?php get_footer(); ?>