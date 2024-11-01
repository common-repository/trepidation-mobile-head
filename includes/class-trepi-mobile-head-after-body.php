<?php

class trepi_mobile_afterbody {

public function __construct(){

// checks if wp_body_open hook exists 
if(has_action('wp_body_open')) {
	// uses the wp_body_open tags
	add_action( 'wp_body_open', 'trepi_hook_to_after_body' );
} else {
	// uses workaround using wp_footer
	add_action('wp_footer', 'trepi_hook_to_after_body', 1, 1);
}

function trepi_hook_to_after_body() { ?>

<div class="hideme">


<div class="mobileNavigation" style="background-color:<?php echo get_theme_mod( 'trepi-color-setting-bar'); ?>;">

  <div class="mobileContainer" style="background-color:<?php echo get_theme_mod( 'trepi-color-setting-bar'); ?>; width: 100%; max-width: <?php echo esc_html(get_theme_mod('trepi_width_container')); ?>px;">

    <div class="mobileIcon" >
	
<div  id="icon1" style="display:<?php echo get_theme_mod( 'trepi_icon_one_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php echo esc_url( home_url( '/' ) ); ?> ">

<?php if(get_theme_mod('trepi-home-upload')) { ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-home-upload' )); ?> "> <?php } else { echo

"<i class='fa fa-home' ></i>"; } ?>
</a>
</div><!-- #icon1 -->







<div  id="icon2" style="display:<?php echo get_theme_mod( 'trepi_icon_two_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 
<a href="mailto:<?php echo get_theme_mod( 'trepi_email_address', 'No Email' ); ?> ">

<?php if(get_theme_mod('trepi-mail-upload')) 

{ ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-mail-upload' )); ?> "> <?php } else { echo

"<i class='fa fa-envelope' ></i>"; } ?>
</a>
</div><!-- #icon2 -->



  



 <div  id="icon3" style="display:<?php echo get_theme_mod( 'trepi_icon_three_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;">    

<a href="tel:<?php echo get_theme_mod( 'trepi_contact_number', 'No contact Number' ); ?> ">

<?php if(get_theme_mod('trepi-phone-upload')) 

{ ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-phone-upload' )); ?> "> <?php } else { echo

"<i class='fa fa-phone' ></i>"; } ?>
</a> 
</div><!-- #icon3 -->



    



<div  id="icon4" style="display:<?php echo get_theme_mod( 'trepi_icon_four_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 
 
 <a href="<?php if( get_theme_mod('trepi-contact-pagefall')) { echo esc_url(get_theme_mod('trepi-contact-pagefall', '')); } else { ?>?p=<?php echo esc_html(get_theme_mod('trepi_contact_page_options', ''));} ?> "> 

<?php if(get_theme_mod('trepi-contact-upload')) 

{ ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-contact-upload' )); ?> "> <?php } else { echo

"<i class='fa fa-comment' ></i>"; } ?>
</a> 
</div><!-- #icon4 -->



    



<div  id="icon5" style="display:<?php echo get_theme_mod( 'trepi_icon_five_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php if( get_theme_mod('trepi-about-usfall')) { echo esc_url(get_theme_mod('trepi-about-usfall', '' )); } else { ?>?p=<?php echo esc_html(get_theme_mod('trepi_about_us_options', '' ));} ?>" > 

<?php if(get_theme_mod('trepi-info-upload')) 

{ ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-info-upload' )); ?> "> <?php } else { echo

"<i class='fa fa-info' ></i>"; } ?></a>
</div><!-- #icon5 -->

    


<div onclick="trepitogglediv('trepdropmenudown')" id="icon6" style="display:<?php echo get_theme_mod( 'trepi_icon_six_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"  >
<?php if(get_theme_mod('trepi-menu-upload')) 
{ ?><img src="<?php echo esc_html(get_theme_mod( 'trepi-menu-upload' )); ?>" id="maps"  > <?php } else { ?>
<i class="fa fa-bars button" id="maps" ></i> <?php } ?>
<span class="stretch" style="width: 100%; display: inline-block; font-size: 0; line-height: 0;"></span>
</div><!-- #icon6 -->




<div style="display: none; position:absolute; top:52px;  width: 100%; margin:0 auto;" id="trepdropmenudown" class="dropdown-menu" >
<div style="position: relative; float: right;">
<div id="droptriangle" style="border-color: transparent transparent <?php if(get_theme_mod('trepi-color-setting-bar')) 
{ echo get_theme_mod( 'trepi-color-setting-bar'); } else { ?> #1b2021; <?php } ?> "> </div>
  <div id='liholder' style="background:#1b2021; width: 100%; max-width: <?php echo esc_html(get_theme_mod('trepi_width_dropdown')); ?>px; display: inline-block; background-color:<?php echo get_theme_mod( 'trepi-color-setting-bar'); ?>;" ><?php wp_nav_menu('title_li=&sort_column=menu_order&depth=2'); ?>
</div><!-- #liholder -->
</div>
</div>

</div><!-- .mobileContainer-->  

 </div><!-- .mobileNavigation -->


</div><!-- .hideme -->

<?php 
} 
}
}
	$obj = new trepi_mobile_afterbody;