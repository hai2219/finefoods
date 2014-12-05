
		<div id="footer">
		<div class="footer-content">
		<div class="bottom-menu">
		
		<div class="group group1">
		<div class="item"><a href="<?php bloginfo('home')?>">Home</a></div>
		<div class="item"><a href="<?php bloginfo('home')?>/about-us">About us</a></div>
		<div class="item"><a href="<?php bloginfo('home')?>/products">Product</a></div>
		
		</div>
		<div class="group group2">
		<div class="item"><a href="<?php bloginfo('home')?>/faq">Faq</a></div>
		<div class="item"><a href="<?php bloginfo('home')?>/contact-us">Contact us</a></div>
		<div class="item">&nbsp;</div>
		</div>
		</div>
		<div class="bottom-join">
		<div class="join">
		
		<?php print do_shortcode('[contact-form-7 id="43" title="Subscribe"]');?>
		</div>
		<div class="copyright">&copy; 2014 FINEFOODS ALL MATERIAL ON THIS SITE IS COPYRIGHTED BY FINEFOODS. FINEFOODS &r; IS A REGISTERED TRADEMARK. NO IMAGES OR COPY ON THIS SITE MAY BE USED WITHOUT WRITTEN PERMISSION BY FINEFOODSIS</div>
		</div>
		<div class="bottom-social">
		<div class="contact">Contact us</div>
		<div class="social-btn">
		<!--
		<a><img src="<?php print get_template_directory_uri() ?>/images/fb.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/twitter.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/youtube.jpg" /> </a>
		<a><img src="<?php print get_template_directory_uri() ?>/images/instagram.jpg" /> </a>
		-->
		<?php dynamic_sidebar(6); ?>
		</div>
		
		</div>
		</div>
		</div><!-- #footer -->
	</div><!-- #wrapper -->
<?php wp_footer(); ?>
</body>
</html>