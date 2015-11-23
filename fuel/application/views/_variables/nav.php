<?php 
/****************************************************************************************
// EXAMPLE:
$nav['about'] = 'About';
$nav['showcase'] = array('label' => 'Showcase', 'active' => 'showcase$|showcase/:any');
$nav['blog'] = array('label' => 'Blog', 'active' => 'blog$|blog/:any');
$nav['contact'] = 'Contact';

// about sub menu
$nav['about/services'] = array('label' => 'Services', 'parent_id' => 'about');
$nav['about/team'] = array('label' => 'Team', 'parent_id' => 'about');
$nav['about/what-they-say'] = array('label' => 'What They Say', 'parent_id' => 'about');
*****************************************************************************************/

$nav = array();

$nav['home'] = array('label' => 'Home', 'location' => '/', 'attributes' => 'data-icon="home"');
$nav['about'] = array('label' => 'About', 'attributes' => 'data-icon="about"');
$nav['news'] = array('label' => 'News', 'attributes' => 'data-icon="news"');
$nav['events'] = array('label' => 'Events', 'attributes' => 'data-icon="events"');
$nav['contact'] = array('label' => 'Contact', 'attributes' => 'data-icon="contact"');