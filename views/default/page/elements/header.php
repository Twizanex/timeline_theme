<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 
 
 
 /**
* Elgg header logo
*/

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
 
/**
* Elgg title element
*
* @uses $vars['title'] The page title
* @uses $vars['class'] Optional class for heading
*/

$class= '';
if (isset($vars['class'])) {
        $class = " class=\"{$vars['class']}\"";
} 



/**
* Export handler.
*
* @package Elgg.Core
* @subpackage Export
*/

//require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/start.php");

        
?>


<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
//echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
//echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
//echo elgg_view_menu('site');
?>
<?php if (!elgg_is_logged_in()) { ?>

<div class="top_bar">												<!-- main top_black bar -->
    <div class="wrapper">                                                                                       <!-- wrapper div -->
        <div class="inner">                                                                                             <!-- opening inner_box -->
            
            <h1 class="logo left">                                                                                      <!-- logo section -->
                <a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('timeline:Finder');?></a>
            </h1>                                                                                                                   <!-- closing logo section -->
            
            
            <form method="post" action="<?php echo elgg_get_site_url(); ?>action/login">
                <div class="login_section right">                                                       <!-- opening login section -->
                
                    <input type="text" value="Email" name="username" class="login_txt left" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" />	<!-- email text box -->

                    <input type="password" value="Password" name="password" class="login_txt left" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" />	<!-- password text box -->

                    <input type="submit" value="LOGIN" class="login_btn left" /> 	<!-- login button -->
                    
                    <a href="<?php echo elgg_get_site_url(); ?>register" title="User Sign up">
                        <input type="button" value="SIGN UP" class="login_btn left" />	<!-- sign up button -->
                    </a>
                    
                    <a href="<?php echo elgg_get_site_url(); ?>forgotpassword" title="Forgot password?">
                        <label for="forgot" class="forgot_txt">						<!-- forgot text _ label -->
                        <?php echo elgg_echo('forget:password');?>
                        </label>													<!-- closing forgot_ text label -->
                    </a>
                    
                </div>														<!-- closing login section -->
                <div class="clear"></div>
                <?php echo elgg_view('input/securitytoken');?>
            </form>
           
            
        </div>														<!-- inner div -->
    </div>															<!-- closing wrapper div -->
</div>																<!-- closing main top bar -->




 <?php } ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
$(document).ready(function(){

	// hide #footer-logo
	$("#footer-logo").hide();
	
	// fade in #footer-logo
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#footer-logo').fadeIn();
			} else {
				$('#footer-logo').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#footer-logo a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	
		// scroll body to 0px on click
		$('#back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	});
	
	

	$(".anchor_post").each(function () {
		var id = this.id;
		
		$("#"+id).click(function (){
			
			
			$(".anchor_post").parent().removeClass("anchor_post_current");
			$(this).parent().addClass("anchor_post_current");
			
			if(id=='back-top') 
				return
			
			anchor_href = $("#"+id).attr('href'); // #mm_yyyy
			if($(anchor_href).length==false){
				location.href='/date/'+anchor_href.substring(4)+'/'+anchor_href.substring(1,3)
			}
			else
			{
				var p = $(anchor_href);
				var position = p.position();


				$('body,html').animate({
					scrollTop: (position.top-60)
				}, 800);
			}
			
		});
	});
	
	
	
	

});
</script>

<?php

// let us grab the onwner icons or groups icons

$owner = page_owner_entity();

if ($owner instanceof ElggEntity) {

$icon = elgg_view("profile/icon",array('entity' => $owner, 'size' => 'medium'));

//TM:  Elgg users and groups have their own icons now let get them and run with them to the finish line. Is that not something! :)
if ($owner instanceof ElggUser || $owner instanceof ElggGroup) {

$display = "<div id=\"photo-elggheader\">" . $icon . "</div>";

}

 
// echo $display; // just for testing

}





?>
<?php// var_dump ($okebemangongo);?>




<!--[if lt IE 9]>
<script src="<?php echo elgg_get_site_url(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


</head>



<body>



			
                       
            <div id="box-scrool-bar">

            <div class="timeline-scroll-bar">
                
                <li class="anchor_post_current"><a id="back-top" class='anchor_post' href="#top">Now</a></li>
                

            </div><!-- #timeline-scroll-bar -->
            </div><!-- #box-scrool-bar -->
            
            
            
            
            </div>
            
            
			
      
            
</nav>


<div id="page" class="hfeed timeline-separator">
      
 
     <?php  
     
   //  TM: Warning! DO NOT MOVE THIS DOWN FUTURE: ICON CAN NOT DISPLAY BELOW HEADER: It took me ten minutes to find out
     
       echo $display; // Icon display
     
     
      ?>   
           
<header id="branding" role="banner">

	
			
	<a href="<?php echo elgg_get_site_url();?>">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/headers/pine-cone.jpg" width="1000" height="288" alt="" />
							</a>

	

				

			<hgroup>
			
		
		

 
<?php 

 // Let us check if no context let use diplay the title of the page if context is == NULL let us grab site name

// TM: works like charm :) Now take a sip of glass of water - this is cool
  if (elgg_get_site_url() === current_page_url()){?>
  
<div id="photo-header"><img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/icons/timeline-photo.jpg"></div>	

            
<h1 id="site-title"><span><a href="<?php echo elgg_get_site_url();?>" title="<?php echo $site_url; ?>" rel="home"><?php echo $site_name; ?></a></span></h1>
<?php } else { ?>


<h1 id="site-description"><span><a href="<?php echo elgg_get_site_url();?>" title="<?php echo $site_url; ?>" rel="home"><?php echo $vars['title']; ?></a></span></h1>

<?php } ?>       
            
    <h2 id="site-description">The First Timeline_theme for ELgg  (v1.8.15)</h2>
    
    </span></h1>           
                     
        <div>	
        
        <?php
        
        if (!elgg_is_logged_in()) {
        // insert site-wide navigation
        echo elgg_view_menu('site');
        
        }
        
        if (elgg_is_logged_in()) {
        // content links
     $content_menu = elgg_view_menu('owner_block', array(
	'entity' => elgg_get_page_owner_entity(),
	'class' => 'category-top',
           ));
           
           echo $content_menu;

        }
        
        ?>
       </div>                   
            
              
            </hgroup>
            
                       

<div id="social-icons">

<h3 class="social-icons-title">Follow me on Social Media</h3>

<a title="Follow on Facebook" href="<?php echo $site_url; ?>" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/facebook.gif" /></a> 



<a href="<?php echo $site_url; ?>" title="Follow on Twitter" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/twitter.gif" /></a> 



<a title="Follow on Linkedin" href="<?php echo $site_url; ?>" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/linkedin.gif" /></a> 



<a title="Follow on YouTube" href="<?php echo $site_url; ?>" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/youtube.gif" /></a> 



<a href="<?php echo $site_url; ?>" title="Follow on Google+" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/google-plus.gif" /></a> 


<a title="Follow with Email" href="<?php echo $site_url; ?>" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/email-rss.gif" /></a> 



<a href="<?php echo $site_url; ?>" title="Follow with Feed RSS" target="_blank">
<img src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/images/social-icons/feed-rss.gif" /></a>


</div>


<div id="site-featured">
<div class="featured-box"><a href="<?php echo elgg_get_site_url();?>" title="Timeline Lightbox"><img width="150" height="150" src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/icons/timeline-screen-150x150.jpg" class="featured-size wp-post-image" alt="timeline-screen" title="timeline-screen" /></a><a class="title-featured" href="<?php echo elgg_get_site_url();?>"> Video Box</a> </div>

<div class="featured-box"><a href="<?php echo elgg_get_site_url();?>" title="Timeline Map"><img width="150" height="150" src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/icons/timeline-place-150x150.jpg" class="featured-size wp-post-image" alt="timeline-place" title="timeline-place" /></a><a class="title-featured" href="<?php echo elgg_get_site_url();?>">Site Map</a></div>

<div class="featured-box"><a href="<?php echo elgg_get_site_url();?>" title="Timeline Post"><img width="150" height="150" src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/icons/timeline-friends-150x150.jpg" class="featured-size wp-post-image" alt="timeline-friends" title="timeline-friends" /></a><a class="title-featured" href="<?php echo elgg_get_site_url();?>"> Wire Posts</a></div>

<div class="featured-box"><a href="<?php echo elgg_get_site_url();?>" title="Music on Timeline"><img width="150" height="150" src="<?php echo elgg_get_site_url(); ?>mod/timeline_theme/graphics/icons/timeline-music-150x150.jpg" class="featured-size wp-post-image" alt="timeline-music" title="timeline-music" /></a><a class="title-featured" href="<?php echo elgg_get_site_url();?>">Popular Music</a></div>            
      </div>
                      

                       

	</header><!-- #branding -->

