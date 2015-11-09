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

$nav['about'] = 'About';
$nav['products'] = 'Products';
$nav['contact'] = 'Contact';
$nav['about1'] = 'About';
$nav['products1'] = 'Products';
$nav['contact1'] = 'Contact';
$nav['about2'] = 'About';
$nav['products2'] = 'Products';
$nav['contact2'] = 'Contact';
$nav['about3'] = 'About';
$nav['products3'] = 'Products';
$nav['contact4'] = 'Contact';
$nav['about5'] = 'About';
$nav['products5'] = 'Products';
$nav['contact6'] = 'Contact';

$nav['about/team'] = array('label' => 'Team', 'parent_id' => 'about');
$nav['about/services'] = array('label' => 'Services', 'parent_id' => 'about');
$nav['about/what-they-say'] = array('label' => 'What They Say', 'parent_id' => 'about');

$nav['about/team2'] = array('label' => 'Team', 'parent_id' => 'about1');
$nav['about/services2'] = array('label' => 'Services', 'parent_id' => 'about1');
$nav['about/what-they-say2'] = array('label' => 'What They Say', 'parent_id' => 'about1');
