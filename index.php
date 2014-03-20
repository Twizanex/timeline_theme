<?php

$index_image_path = "mod/timeline_theme/css/timeline_front_index3.png";

// the three icons
$index_image_one = "mod/timeline_theme/css/photos.png";
$index_image_two = "mod/timeline_theme/css/share.png";
$index_image_three = "mod/timeline_theme/css/search.png";

$footer = elgg_view('page/elements/footer', $vars);

if (elgg_is_logged_in())
{
forward('activity');
}



?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
        <title>Elgg Network</title>
  <!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
    
    

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="mod/timeline_theme/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="mod/timeline_theme/css/style.css" />
		<link rel="stylesheet" type="text/css" href="mod/timeline_theme/css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="mod/timeline_theme/css/topbar.css" />
		
		
	
		
		
		
		
		
		
    </head>
    
            
    
    
    <body>
    
      
            <!--  top bar -->
    
    	<?php if (!elgg_is_logged_in()) { ?>

<div class="top_bar">												<!-- main top_black bar -->
    <div class="wrapper">                                                                                       <!-- wrapper div -->
        <div class="inner">                                                                                             <!-- opening inner_box -->
            
            <h1 class="logo left">                                                                                      <!-- logo section -->
                <a href="<?php echo elgg_get_site_url(); ?>"><?php echo elgg_echo('timeline:Finder')    ;?></a>
            </h1>                                                                                                                   <!-- closing logo section -->
            
            
            <form method="post" action="<?php echo elgg_get_site_url(); ?>action/login">
                <div class="login_section right">                                                       <!-- opening login section -->
                
                    <input type="text" value="Email" name="username" class="login_txt left" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" />	<!-- email text box -->

                    <input type="password" value="" name="password" class="login_txt left" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" />	<!-- password text box -->

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
           
            
        </div>											<!-- inner div -->
    </div>											<!-- closing wrapper div -->
</div>												<!-- closing main top bar -->

 <?php } ?>
 
    
 
            </div><!--/ top bar -->
			
	<div class="containerme">		
			

        <div class="container">
            <!--  top bar -->
         
         

        
         
            </div><!--/ top bar -->
            
            
            

         <section>   <!--  section        <section>	-->
            
            			
                <div id="" >
                
         <div class="wrapperIndex"><div class="wrappergradientContent"><div class="clearandfix"> <!-- Start of the middle container for our index -->
                
           
            <div class="messagesheading"> <!-- TM: Open error message -->
            
 
 
 
 <script>			
//The jQuery	
		

	
</script>			 
 
            
            
            
			<?php 
		
			
$hereisthemesa = $_SESSION['msg'];
$okebemangongo = elgg_view('page/elements/messages', array(
                        'object' => $_SESSION['msg'],
                        
                        
                        
                        
                        ));			
			
			
			
			
   if (!empty($hereisthemesa)) {

$message = elgg_echo($okebemangongo);
echo "<h3 class=\" error message\">$message</h3>";
} else {

}

unset($_SESSION['msg']);


?>    
                
 </div> <!-- TM: Close error message -->               
                
                
                
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    
                  
                    <div id="wrapperimage">       <!--open  The wrapper that will contain our site image -->
                    
                    
                   <div class="wrapperheading"> We can help you share with the people that matters in your life.</div> 
                    
 <a href="<?php echo elgg_get_site_url();?>"><img src="<?php echo elgg_get_site_url(); ?><?php echo  $index_image_path?> " style='position:relative; width:537px; height:195px; z-index: 35;' alt="" />
							</a>
	      
	      
	      <!--  The defination of the site                -->
	      <div class="timeline_theme_1d timeline_theme_2b"><div class="timeline_theme_1a timeline_theme_1b timeline_theme_1c" style="text-align: center; width: 55px"><img class="img" src="<?php echo elgg_get_site_url(); ?><?php echo  $index_image_one?>" alt="" style="vertical-align: middle"></div><div class="timeline_theme_1a timeline_theme_1b timeline_theme_desc"><span class="timeline_theme_1d timeline_theme_1e timeline_theme_1f timeline_theme_1g timeline_theme_1h"> Browse photos and new updates </span><span class="timeline_theme_2c timeline_theme_2d timeline_theme_2e timeline_theme_2f"> from your friends in News Dashboard. </span></div></div>
	      
	      



<div class="timeline_theme_1d timeline_theme_2b"><div class="timeline_theme_1a timeline_theme_1b timeline_theme_1c" style="text-align: center; width: 55px"><img class="img" src="<?php echo elgg_get_site_url(); ?><?php echo  $index_image_two?>" alt="" style="vertical-align: middle"></div><div class="timeline_theme_1a timeline_theme_1b timeline_theme_desc"><span class="timeline_theme_1d timeline_theme_1e timeline_theme_1f timeline_theme_1g timeline_theme_1h"> Update and see what's new </span><span class="timeline_theme_2c timeline_theme_2d timeline_theme_2e timeline_theme_2f"> in your profile Timeline. </span></div></div>





<div class="timeline_theme_1d timeline_theme_2b"><div class="timeline_theme_1a timeline_theme_1b timeline_theme_1c" style="text-align: center; width: 55px"><img class="img" src="<?php echo elgg_get_site_url(); ?><?php echo  $index_image_three?>" alt="" style="vertical-align: middle"></div><div class="timeline_theme_1a timeline_theme_1b timeline_theme_desc"><span class="timeline_theme_1d timeline_theme_1e timeline_theme_1f timeline_theme_1g timeline_theme_1h"> Search more </span><span class="timeline_theme_2c timeline_theme_2d timeline_theme_2e timeline_theme_2f"> of what you love most by Searching engine. </span></div></div>


	      
	      
	      
	      
	      
	      <!--   Close the defination of the site                  -->
	      
	      
	      
	      
                    
                    </div>         <!-- close The wrapper that will contain our site image -->
                    
                    
                    <div id="wrapper">
                    
                    
                    
                    
                    
                     
                    
                     <!-- open the login form -->
                     
 							<?php
$ts = time();
$token = generate_action_token($ts);
?>                    
                    
                         
                        
                        
                         <!-- close the login form -->
                        
                        

                        <div id="register" class="animate form">
                            <form  method="post" action="action/register" class="elgg-form" autocomplete="on"> 
							
							<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>" />
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
                               
                              <div class="timeline_theme_1i timeline_theme_1j timeline_theme_1k-"><div class="timeline_theme_1l timeline_theme_1m timeline_theme_1n timeline_theme_1o timeline_theme_1p">
                              Sign Up
                              </div><div class=" timeline_theme_1w timeline_theme_1x timeline_theme_1y timeline_theme_1z ">
                              The social networking is at your fingertips.
                              </div></div>
                               
                               
                                 
								
				 <p>			
                                    <label for="usernamesignup" class="uname" data-icon="u">Your display name</label>
                                    <input id="usernamesignup" class="timeline_theme_2a"   name="name" required="required" type="text" placeholder="Enter Display Name" />
                               
                             </p>
                                 <p> 
                                 	
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" class="timeline_theme_2a" name="username" required="required" type="text" placeholder="Enter Username" />
                                
                               
                                 
                                 </p>
                                 
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup"  class="timeline_theme_2a"  name="email" required="required" type="email" placeholder="Enter Email"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" class="timeline_theme_2a"   name="password" required="required" type="password" placeholder="Enter Password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" class="timeline_theme_2a"   name="password2" required="required" type="password" placeholder="Repeat Password"/>
                                </p>
								
							
					<?php echo elgg_view('register/extend');?>			
								
								<input type="hidden" name="friend_guid" />
<input type="hidden" name="invitecode" />
<input type="hidden" value="register" name="action" />
                                <p class="signin button"> 
									<input type="submit" value="Sign up"  name="submit" class="elgg-button elgg-button-submit"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="login" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                    
                    
                    </div>  </div> </div>  <!-- Closing the middle container for our index -->
                    
                    
                    
                </div>  
                
                
                
                
                   
                
     </section>    <!-- section     </section>   --> 
        </div>
        
</div>

    </body>
    
    
   
</html>