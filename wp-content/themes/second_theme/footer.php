<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package second_theme
 */

?>

	<footer class="site-footer footer-section">
		<div class="site-wrapper">
			<div class="footer-holder">
				<div class="footer-icon">
					<?php 
						if(is_home() || is_front_page() || is_page( 'contact-page' )) { ?>
							<img src="<?php echo get_template_directory_uri();?>/asset/icons/Vector1.png" alt="">
					<?php } ?> 
				</div>
				
				<div class="sign-up-section">
					<h3>Keep in the loop. We won’t spam you.</h3>
					<p><?php echo get_theme_mod( 'footer_sign_up_text' )?></p>
					<span class="sign-up-form">
             	 	<form class="email-form" action="" method="post">
                	<input class="email-input" type="text" name="" placeholder="email" id="">
                	<!---->
                	<button type="submit">Subscribe</button>
            		</span>
				</div>

				<div class="last-group">
					<div class="contact-section">
						<h3>Contact Us</h3>
						<span>
							<h6>email</h6>
							<p><?php echo get_theme_mod( 'footer_email_address' )?></p>
						</span>

						<span class="address-text">
							<h6>address</h6>
							<p><?php echo get_theme_mod( 'footer_address_text' )?></p>
						</span>
					</div>

					<div class="find-out-section">
						<h3>Find Out More</h3>
						<div class="social-icons">
							<img src="<?php echo get_template_directory_uri();?>/asset/icons/facebook.png" alt="">
							<img src="<?php echo get_template_directory_uri();?>/asset/icons/instagram.png" alt="">
						</div>
					
					</div>

				</div>
			
			</div>
		</div>


		<div class="footer-border"></div>

		<div class="last-section">
			<div class="site-wrapper">
				<div class="footer-holder-2">
					<div class="first-part"> 
						<?php
             			 wp_nav_menu(
              				array(

              				'theme_location' => 'footer-menu1',
              				'container'      => 'div',
							'container_class'=>  'first-part',
              				'before'      => '',
              				'after'      => '',
              				'items_wrap'     => '<ul>%3$s</ul>',
           					)
          					);
          				?> 
					</div>

					<div class="second-part">
						<?php
             			 wp_nav_menu(
              				array(
							'theme_location' => 'footer-menu2',
              				'container'      => 'div',
							'container_class'=>  'second-part',
              				'before'      => '',
              				'after'      => '',
              				'items_wrap'     => '<ul>%3$s</ul>',
           					)
          					);
          				?> 
			
					</div>
				</div>

			</div>

		</div>
		
		
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
