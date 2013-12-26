<?php
/**
 * Elgg user display (details)
 * @uses $vars['entity'] The user entity
 */

$user = elgg_get_page_owner_entity();

$profile_fields = elgg_get_config('profile_fields');

echo '<div id="profile-details" class="elgg-body pll">';
echo "<div class='header_bg clear'><h2>{$user->name}</h2></div>";

if (is_array($profile_fields) && sizeof($profile_fields) > 0) {
	foreach ($profile_fields as $shortname => $valtype) {
		if ($shortname == "briefdescription") {
		$value = $user->$shortname;
		if (!empty($value)) {
			//This function controls the alternating class
			$even_odd = ( 'odd' != $even_odd ) ? 'odd' : 'even';
			?>
			<div class="<?php echo $even_odd; ?>">
				<?php
					echo elgg_view("output/{$valtype}", array('value' => $user->$shortname));
				?>
			</div>
			<?php
		}
            }
	}
}

echo '<div class="header_bg clear">';
echo '<h2 class="left">Profile Information</h2>';

// grab the actions and admin menu items from user hover
$menu = elgg_trigger_plugin_hook('register', "menu:user_hover", array('entity' => $user), array());
$builder = new ElggMenuBuilder($menu);
$menu = $builder->getMenu();
$actions = elgg_extract('action', $menu, array());

if (elgg_is_logged_in() && $actions) {
    if(elgg_get_logged_in_user_guid() == elgg_get_page_owner_guid()){
        echo '<a href="'.elgg_get_site_url().'profile/'.$user->username.'/edit" class="edit_btn right">EDIT</a>';
    }
}
echo '</div>';

echo elgg_view("profile/status", array("entity" => $user));

$even_odd = null;
if (is_array($profile_fields) && sizeof($profile_fields) > 0) {
	foreach ($profile_fields as $shortname => $valtype) {
		if ($shortname == "description" || $shortname == "briefdescription") {
			// skip about me and put at bottom
			continue;
		}
		$value = $user->$shortname;
		if (!empty($value)) {
			//This function controls the alternating class
			$even_odd = ( 'odd' != $even_odd ) ? 'odd' : 'even';
			?>
			<div class="<?php echo $even_odd; ?>">
				<b><?php echo elgg_echo("profile:{$shortname}"); ?>: </b>
				<?php
					echo elgg_view("output/{$valtype}", array('value' => $user->$shortname));
				?>
			</div>
			<?php
		}
	}
}

if (!elgg_get_config('profile_custom_fields')) {
	if ($user->isBanned()) {
		echo "<p class='profile-banned-user'>";
		echo elgg_echo('banned');
		echo "</p>";
	} else {
		if ($user->description) {
			echo "<p class='profile-aboutme-title'><b>" . elgg_echo("profile:aboutme") . "</b></p>";
			echo "<div class='profile-aboutme-contents'>";
			echo elgg_view('output/longtext', array('value' => $user->description, 'class' => 'mtn'));
			echo "</div>";
		}
	}
}

echo '</div>';