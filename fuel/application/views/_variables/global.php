<?php

// declared here so we don't have to in each controller's variable file
$CI =& get_instance();

/* GENERIC GLOBAL PAGE VARIABLES USED FOR ALL PAGES
---------------------------------------- **/
$vars = array();
$vars['layout'] = 'main';
$vars['page_title'] = fuel_nav(array('render_type' => 'page_title', 'delimiter' => ' : ', 'order' => 'desc', 'home_link' => 'Daylight Roasters'));
$vars['meta_keywords'] = 'Portland OR Coffee Roasting';
$vars['meta_description'] = 'Daylight Roasters is a world-renowned coffee roasting company located in Portland, OR';
$vars['js'] = array();
$vars['css'] = array();
$vars['body_class'] = uri_segment(1).' '.uri_segment(2);

/* SET $h1 BASED ON NAV LABEL */
include('nav.php');
$vars['h1'] = isset($nav[uri_string()]) ? $nav[uri_string()]['label'] : '';
$vars['append'] = array();

/* PAGE SPECIFIC VARS
---------------------------------------- **/
$pages = array();
$pages['home'] = array('body_class' => 'home', 'sitetitle_tag' => 'h1');
