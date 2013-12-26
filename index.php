<?php
/**
* Timeline_theme plugin index page
* 
* @package Timelne_theme 
* @package Friends finder theme 
* @author Tom Ondiba @ Twizanex Team
* @author sijo @ Cubet Technologies
* @
*/


if (elgg_is_logged_in()) {
	forward('activity');
}

elgg_pop_context();

elgg_set_context("home");

// lay out the content
$params = array(
	'blogs' => $blogs,
	'bookmarks' => $bookmarks,
	'files' => $files,
	'groups' => $groups,
	'login' => $login,
	'members' => $newest_members,
);

$body = elgg_view_layout('timeline_index', $params);

echo elgg_view_page('', $body);
