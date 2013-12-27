<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

//echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
//
//$powered_url = elgg_get_site_url() . "_graphics/powered_by_elgg_badge_drk_bckgnd.gif";
//
//echo '<div class="mts clearfloat float-alt">';
//echo elgg_view('output/url', array(
//	'href' => 'http://elgg.org',
//	'text' => "<img src=\"$powered_url\" alt=\"Powered by Elgg\" width=\"106\" height=\"15\" />",
//	'class' => '',
//	'is_trusted' => true,
//));
//echo '</div>';

$site = elgg_get_site_entity();
$site_name = $site->name;


?>
<?php 

// TM: let us load our Timeline Javascript Scroll to the top

//echo elgg_view('page/elements/js/timeline_theme');

?>

<div class="footer_area clear">										<!-- opening footer area section -->
    <div class="wrapper">											<!-- opening wrapper section -->

        <p class="my_web left">										<!-- opening my_web section -->
            <a href="<?php echo elgg_get_site_url(); ?>"><?php echo $site_name; ?></a> &copy; 2014
        </p>														<!-- closing my web section -->
        
        <ul class="footer_nav right">								<!-- opening footer nav lists -->
            <li><a href="<?php echo elgg_get_site_url(); ?>about"><?php echo elgg_echo('About Us');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('Advertising');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('Developers');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('Careers');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>terms"><?php echo elgg_echo('Terms');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>privacy"><?php echo elgg_echo('Policy');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('Faq');?></a></li>
            <li><a href="<?php echo elgg_get_site_url(); ?>blog/all"><?php echo elgg_echo('blog');?></a></li>
        </ul>													<!-- closing footer nav lists -->
        <div class="clear"></div>
        
    </div>														<!-- closing wrapper section -->
</div>															<!-- closing footer area section -->
