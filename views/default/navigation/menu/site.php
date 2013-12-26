<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
//$more_items = elgg_extract('more', $vars['menu'], array());

echo '<ul class="category-top">';
echo '<li class=""></li>';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
        echo '<li class=""></li>';
}
/*
if ($more_items) {
	echo '<li class="elgg-more">';

	$more = elgg_echo('more');
	echo "<a href=\"#\">$more</a>";
	// TM: removed the class part. Check original code
	echo elgg_view('navigation/menu/elements/section', array(
		'class' => '', 
		'items' => $more_items,
	));
	
	echo '</li>';
}
*/
echo '</ul>';
