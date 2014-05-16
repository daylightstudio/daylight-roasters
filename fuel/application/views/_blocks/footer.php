	<div class="clearfix"></div>
	<footer class="footer clearfix">
		<div class="wrapper">
			<p class="colophon small">&copy; <?php echo date("Y"); ?> My Website. All Rights Reserved. Site by <a href="http://thedaylightstudio.com" target="_blank">Daylight</a></p>
		</div>
	</footer>

	<?php /* JavaScript at the bottom for faster page loading */?>
	<?php echo js('plugins, main'); ?>
	<?php echo js($js); ?>
	<?php echo fuel_block('tracking')?>
</body>
</html>