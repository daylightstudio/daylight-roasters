	<footer class="footer">
		<div class="wrapper">
			<div class="row">
				<div class="footer-col">
					<p><img src="http://placehold.it/200x100" alt="site logo"></p>
					<h5>Newsletter Signup</h5>
					<form>
						<div class="form-field">
							<label for="email_newsletter" class="sr-only">Your Email</label>
							<input type="email" placeholder="Your Email" class="form-input-nested-text">
							<input type="submit" value="Sign up" class="form-input-nested-btn">
						</div>
					</form>
				</div>
				<div class="footer-nav-col">
					<?php echo fuel_nav(array('container_tag_class' => 'footer-nav', 'item_id_prefix' => 'fnav_'))?>
				</div>
				<div class="footer-col">
					<h5>Contact Us</h5>
					<address>
						123 South Main Street<br>
						Portland, Oregon 97202<br>
						<a href="tel:+15035555555">503.555.5555</a>
					</address>
					<p>
						<a href="wibble" class="footer-social-link" target="_blank" title="Facebook Link"><i class="fa fa-facebook"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="Twitter Link"><i class="fa fa-twitter"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="LinkedIn Link"><i class="fa fa-linkedin"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="Instagram Link"><i class="fa fa-instagram"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="YouTube Link"><i class="fa fa-youtube"></i></a>
					</p>
				</div>
			</div>
		</div>
		<p class="colophon small">&copy; <?php echo date("Y"); ?> My Website. All Rights Reserved. Site by <a href="http://thedaylightstudio.com" target="_blank">Daylight</a></p>
	</footer>

	<?php /* JavaScript at the bottom for faster page loading */?>
	<?php echo js('plugins, main'); ?>
	<?php echo js($js); ?>
	<?php echo fuel_block('tracking')?>
</body>
</html>