<?php $CI->load->module_helper(FORMS_FOLDER, 'forms'); ?>
<?php $CI->load->module_helper(LOCATIONS_FOLDER, 'locations'); ?>
<?php fuel_set_var('layout', 'contact') ?>
<h2>Contact Us</h2>
<?=form('contact')?>