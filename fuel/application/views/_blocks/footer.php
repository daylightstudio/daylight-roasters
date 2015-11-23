	<footer class="footer">
		<div class="wrapper">
			<div class="row">
				<div class="footer-col">
					<h5>Menu</h5>
					<?php echo fuel_nav(array('container_tag_class' => 'footer-nav', 'item_id_prefix' => 'fnav_'))?>
				</div>
				<div class="footer-col">

					<!-- News -->
					<?php $news = fuel_model('news', array('limit' => 3)) ?>
					<?php if (!empty($news)) : ?>
					<h5>Latest News</h5>
					<ul>
						<?php foreach($news as $item) : ?>
						<li><a href="<?=$item->url?>"><?=$item->title?></a></li>
						<?php endforeach; ?>

					</ul>
					<?php endif; ?>

					<!-- Events -->
					<?php $events = fuel_model('events', 'upcoming', array(3)) ?>
					<?php /* Above calls the Events_model::find_upcoming method which is the same as the following ?>
					<?php $events = fuel_model('events', array('limit' => 3, 'where' => array('start_date >=' => datetime_now()))) ?>
					<?php */ ?>
					<?php if (!empty($events)) : ?>
					<h5>Upcoming Events</h5>
					<ul>
						<?php foreach($events as $event) : ?>
						<li><a href="<?=$event->url?>"><?=$event->name?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>


				</div>
				<div class="footer-col">
					<h5>Social Media</h5>
					<p>
						<a href="#" class="footer-social-link" target="_blank" title="Facebook Link"><i class="fa fa-facebook"></i></a>
						<a href="#" class="footer-social-link" target="_blank" title="Twitter Link"><i class="fa fa-twitter"></i></a>
						<a href="#" class="footer-social-link" target="_blank" title="Instagram Link"><i class="fa fa-instagram"></i></a>
						<a href="#" class="footer-social-link" target="_blank" title="Google Plus Link"><i class="fa fa-google-plus"></i></a>
					</p>
				</div>
			</div>
		</div>
		<p class="colophon small">&copy; <?php echo date("Y"); ?> <a href="http://thedaylightstudio.com" target="_blank">Daylight Studio</a></p>
	</footer>

	<?php /* JavaScript at the bottom for faster page loading */?>
	<?php echo js('plugins, main'); ?>
	<?php echo js($js); ?>
	<?php echo fuel_block('tracking')?>
</body>
</html>