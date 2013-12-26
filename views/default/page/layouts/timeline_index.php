<?php
/**
* timeline_theme home page
*
*/

?>
<div class="main_container clear">									<!-- main container -->
<div class="wrapper">											<!-- opening wrapper -->
<div class="inner">											<!-- opening inner_box -->
<div class="left_area left">								<!-- opening left area -->

    <div class="main_img">									<!-- main img div box -->
            <img src="<?php /*echo elgg_get_site_url();*/ ?>mod/timeline_theme/graphics/main_banner.jpg" alt="" />
    </div>													<!-- closing main img div box -->

    <p class="main_para">
            <a href="#"><span class="blue">Social networking </span><span class="black">Community</span></a> is a great way to find support and help others...Contribute to your social networking site. Use this social network to connect with friends from Home, Work, School, and Neighbors. Your social network community works best when each member works as a team. You and other members can keep things less complicated... With all these online tools advantages, who needs online drama and nightmares?
    </p>

    <?php
    if(elgg_is_active_plugin('groups')) {
    ?>
    <div class="groups_members clear">						<!-- goup members area -->

    <div class="header_bg clear">				<!-- header background bg  for groups blocks -->
            <h2><?php echo elgg_echo('Our Groups');?></h2>
    </div>										<!-- closing header bg for groups blocks -->
            
            <ul>
            <?php
            $group_content = elgg_get_entities(array(
                                                                                    'type' => 'group',
                                                                                    'limit'  =>  10
                                                                            ));
            if($group_content){
                foreach($group_content as $content){
                    $url=$content->getURL();
                    $name=$content->name;
                    $img=$content->getIconURL('medium');
                    // number of members
                    $num_members = get_group_members($content->guid, 10, 0, 0, true);
                    ?>
                    <li>
                            <a href="<?php echo $url ?>"><img src="<?php echo $img; ?>" alt="" align="middle" height="82px" width="82px"/></a>
                            <div class="grp_name">
                                    <h3><a href="<?php echo $url ?>"><?php echo $name ?></a></h3>
                                    <p><?php echo $num_members ?> members</p>
                            </div>
                    </li>
                    <?php
                }
            }
            if (!$group_content) {
                    echo $content = elgg_echo('groups:none');
            }
            ?>
            </ul>
            
            <div class="see_all clear">
                    <a href="<?php echo elgg_get_site_url(); ?>groups/all" ><?php echo elgg_echo('see:all');?></a>
            </div>
    </div>													<!-- closing groups members area -->
    <?php } ?>
    
</div>														<!-- closing left area section -->

<div class="right_area right">								<!-- opening right area -->
    <div class="single_column left">						<!-- first single column section -->
            											<!-- closing browse ur projects -->
            
            <?php
            if(elgg_is_active_plugin('event_calendar')) {
            ?>
            <div class="news_events clear">						<!-- opening news_events section -->
                    <div class="header_bg clear">					<!-- header background bg  -->
                            <h2><?php echo elgg_echo('News &amp; Events');?></h2>
                    </div>											<!-- closing header bg  -->
                    
                    <?php
                    $eventoptions = array('types' => 'object',
                                                            'subtypes'	=> 'event_calendar',
                                                            'limit'  =>  3);
                    $events = elgg_get_entities($eventoptions);
                    if($events){
                        foreach($events as $event){
                            $url=$event->getURL();
                            $name=$event->title;
                            //$img=$event->getIconURL('medium');
                            $timestamp = elgg_get_friendly_time($event->time_created);
                            $comments_count = $event->countComments();
                            ?>
                            <div class="main_list">							<!-- main contents list -->
                                    <a href="<?php echo $url ?>" class="main_txt">
                                    <?php echo $name ?>
                                    </a>
                                    <ul>
                                            <li><?php echo $timestamp ?></li>
                                            <li class="last">Comments <?php echo $comments_count ?></li>
                                    </ul>
                            </div>											<!-- closing main contents lists -->
                            <?php
                        }
                    }
                    if (!$events) {
                            echo elgg_echo('event_calendar:no_events_found');
                    }
                    ?>
                    
                    <div class="see_all clear">						<!-- see all section -->
                            <a href="<?php echo elgg_get_site_url(); ?>event_calendar/list"><?php echo elgg_echo('see:all');?></a>
                    </div>											<!-- closing see all section -->
            </div>												<!-- closing news_events section -->
            <?php } ?>

            <div class="latest_activity clear">						<!-- opening latest activity section -->

                    <div class="header_bg clear">					<!-- header background bg  -->
                            <h2><?php echo elgg_echo('Latest Activities');?></h2>
                    </div>											<!-- closing header bg  -->
                    
                    <?php
                    $options = array(
                                                    'limit'      => 3,
                                                    'pagination' => FALSE,
                                                );
                    $activity = elgg_list_river($options);
                    echo $activity;
                    ?>
                    
                    <div class="see_all clear">						<!-- see all section -->
                            <a href="<?php echo elgg_get_site_url(); ?>activity" ><?php echo elgg_echo('see:all');?></a>
                    </div>											<!-- closing see all section -->
            </div>												<!-- closing latgest activity section -->
    </div>													<!-- closing first single column section -->

    <div class="single_column n_margin left">						<!-- second single column section -->
            <div class="friends_area">							<!-- opeing friends area -->

                    <div class="header_bg clear">					<!-- header background bg  -->
                            <h2><?php echo elgg_echo('Members');?></h2>
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
                                <a href="#" ><?php echo elgg_echo('see:all');?></a>
                        </div>											<!-- closing see all section -->

                </div>												<!-- closing community sections -->
            <?php } ?>
            
            <div class="google_ads_area">						<!-- opening google adsense area -->
                    <img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/google_add.jpg" alt="" />
            </div>												<!-- closing google adsense area -->

    </div>													<!-- closing single column section -->
</div>														<!-- closing right area -->

<div class="clear"></div>
</div>														<!-- closing inner div -->
</div>															<!-- closing wrapper -->
<div class="clear"></div>
</div>																<!-- closing main container -->
