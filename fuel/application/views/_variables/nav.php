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

$nav['about'] = array('label' => 'About');
$nav['products'] = array('label' => 'Products');
$nav['contact'] = array('label' => 'Contact');

$nav['about/team'] = array('label' => 'Team', 'parent_id' => 'about');
$nav['about/services'] = array('label' => 'Services', 'parent_id' => 'about');
$nav['about/what-they-say'] = array('label' => 'What They Say', 'parent_id' => 'about');

$nav['about/team2'] = array('label' => 'Team', 'parent_id' => 'contact');
$nav['about/services2'] = array('label' => 'Services', 'parent_id' => 'contact');
$nav['about/what-they-say2'] = array('label' => 'What They Say', 'parent_id' => 'contact');
