<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

// navigation defaults to breadcrumbs
$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

?>

<div class="<?php echo $class; ?>">

	<div class="elgg-main elgg-body">
            
            <div class="new-main-content">
		<?php
			echo $nav;
			
			if (isset($vars['title'])) {
				echo elgg_view_title($vars['title']);
			}
			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			if (isset($vars['content'])) {
				echo $vars['content'];
			}
		?>
            </div>
            
            <div class="elgg-sidebar">
                    <?php
                            echo elgg_view('page/elements/sidebar', $vars);
                    ?>
            </div>
            
            <div class="single_column n_margin left">						<!-- second single column section -->

                    <div class="friends_area">						<!-- opeing friends area -->

                            <div class="header_bg clear">					<!-- header background bg  -->
                                    <h2><?php echo elgg_echo('members');?></h2>
                            </div>											<!-- closing header bg  -->
                            <?php
                            $options = array('type' => 'user', 'limit'  =>  12);
                            $usercontents = elgg_get_entities($options);
                            ?>
                            <div class="members">							<!-- opening members div -->
                                <?php
                                if($usercontents){
                                    $mem_count = 1;
                                    foreach($usercontents as $user){
                                        $url=$user->getURL();
                                        $displayname=$user->name;
                                        $img=$user->getIconURL('small');
                                        if($mem_count<=12){
                                            $users_block .="<span class='mem_img'>";
                                            $users_block .='<a href="'.$url.'"><img src="'.$img.'" title="'.$displayname.'" /></a>';
                                            $users_block .="</span>";
                                        }
                                        $mem_count++;
                                    }
                                }
                                echo $users_block;
                                ?>
                                <div class="clear"></div>
                            </div>											<!-- closing members div -->

                            <div class="see_all clear">						<!-- see all section -->
                                    <a href="<?php echo elgg_get_site_url(); ?>members" ><?php echo elgg_echo('see:all');?></a>
                            </div>											<!-- closing see all section -->

                    </div>												<!-- closing friends area -->
                    
                    <?php if(elgg_is_active_plugin('community')) { ?>
                        <div class="communities_sec">						<!-- communities section -->
                                <div class="header_bg clear">					<!-- header background bg  -->
                                        <h2><?php echo elgg_echo('communities');?></h2>
                                </div>											<!-- closing header bg  -->

                                <div class="main_list">							<!-- main contents list -->
                                        <a href="#" class="main_txt">
                                        Equalities Forum
                                        </a>
                                        <p>
                                                I have set up this forum as...
                                        </p>
                                </div>											<!-- closing main contents lists -->
                                <div class="main_list">							<!-- main contents list -->
                                        <a href="#" class="main_txt">
                                        Equalities Forum
                                        </a>
                                        <p>
                                                I have set up this forum as a means of providing an ...
                                        </p>
                                </div>											<!-- closing main contents lists -->
                                <div class="main_list">							<!-- main contents list -->
                                        <a href="#" class="main_txt">
                                        Charity events around Sussex
                                        </a>
                                        <p>
                                                Elvis in Concert   A great charity event...
                                        </p>
                                </div>											<!-- closing main contents lists -->

                                <div class="see_all clear">						<!-- see all section -->
                                        <a href="#" >See All</a>
                                </div>											<!-- closing see all section -->
                        </div>												<!-- closing community sections -->
                    <?php } ?>
                    
          <!--          <div class="google_ads_area">	-->					<!-- opening google adsense area -->
           <!--                 <img src="<?php echo elgg_get_site_url(); ?>mod/friendsfinder_theme/graphics/google_add.jpg" alt="" />  -->
                            
                <!--    </div>  -->
                    
                  
                    <!-- TM: Twizanex sidebar_alt extension starts adsense area-->
                    <div class="elgg-sidebar-alt">
			<?php echo elgg_view('page/elements/sidebar_alt', $vars); ?>
		</div>
                    <!-- TM: Twizanex sidebar_alt extension ends adsense area-->
                    												<!-- closing google adsense area -->
            </div>

	</div>
        

</div>
