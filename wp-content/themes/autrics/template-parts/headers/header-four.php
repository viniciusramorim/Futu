<?php 

if ( defined( 'FW' ) ) { 
   $header_topbar_settings =             autrics_option('header_top_bar_settings');
   $header_contact_setting =             autrics_option("header_contact_settings");
   $header_contact_button =              autrics_option('header_contact_button_settings');


   //topbar
   $header_topbar_time =                $header_topbar_settings["header_topbar_title"];
   $header_topbar_social =              $header_topbar_settings["header_topbar_social_links"];

   // header contact
   $header_phone_icon =                 $header_contact_setting["header_contact_icon"];
   $header_phone_title =                $header_contact_setting["header_contact_title"];
   $header_phone_number =               $header_contact_setting["header_contact_number"];
   $header_mail_icon =                  $header_contact_setting["header_contact_mail_icon"];
   $header_mail_title =                 $header_contact_setting["header_contact_mail_title"];
   $header_mail =                       $header_contact_setting["header_contact_mail"];

   //contact button 
   $header_contact_button_show =        $header_contact_button["header_contact_btn_show"];
   $header_contact_button_text =        $header_contact_button["header_contact_btn_title"];
   $header_contact_button_url =         $header_contact_button["header_contact_btn_url"];
 
   
   }else{
   //default   
   $header_topbar_time = " ";
   $header_topbar_social = [];
   $header_phone_title = '';
   $header_phone_number = '';
   $header_mail_title = '';
   $header_mail = '';
   $header_phone_icon = '';
   $header_mail_icon = '';
      //contact button 
   $header_contact_button_show = 'yes';
   $header_contact_button_text = '';
   $header_contact_button_text = '';


   } 

?>

   <div class="ts-top-bar-2 standard">
      <div class="container">
      <?php if (defined( 'FW' )): ?>
         <div class="row">
            <div class="col-lg-6 col-md-5">
            <?php if ( $header_topbar_time!= '' ): ?>
               <div class="top-bar-event">
                  <i class="icon icon-clock"></i><span><?php echo esc_html($header_topbar_time); ?></span>
               </div> <!-- Top Bar Text End -->
              <?php endif; ?> 
            </div>
            <div class="col-lg-4 col-md-4">
            </div> <!-- Col End -->
            <div class="col-lg-2 col-md-3 text-right">
              <?php if ( count( $header_topbar_social ) ): ?>
               <div class="top-bar-social-icon ml-auto">
                  <ul>
                     <?php foreach ( $header_topbar_social as $social ): ?>
                         <li><a href="<?php echo esc_url($social["url"]); ?>" target="_blank"><i class="<?php echo esc_attr($social["icon_class"]); ?>"></i></a></li>
                     <?php endforeach; ?> 
                
                  </ul>
               </div> <!-- Social End -->
               <?php endif; ?>
            </div><!-- Col End -->
         </div> <!-- Row End -->
       <?php endif; ?>  
      </div> <!-- Container End -->
   </div> <!-- Top Bar End -->


   <header id="ts-header-transparent" class="header-default ts-header-transparent <?php echo autrics_option('header_nav_sticky_section','no')=="yes"?"navbar-fixed":'' ?> ">

      <div class="ts-logo-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-sm-12 align-self-center">
               <a class="ts-logo" href="<?php echo esc_url( home_url( '/' )); ?>" class="ts-logo">
                  <img src="<?php 
                  echo esc_url(
                     autrics_src(
                        'general_dark_logo',
                        AUTRICS_IMG . '/logo/logo2.png'
                     )
                  );
                 ?>" alt="<?php bloginfo('name'); ?>">
                  </a>
               </div> <!-- Col End -->
               <div class="col-lg-9 col-sm-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="<?php echo esc_attr__("Toggle navigation", 'autrics'); ?>">
                        <span class="navbar-toggler-icon"></span>
                     </button><!-- End of Navbar toggler -->
                     <div class="collapse navbar-collapse justify-content-end ts-navbar" id="navbarSupportedContent">
                     <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                       
                        <?php if($header_contact_button_show=='yes' && is_array($header_contact_button) ): ?>
                        <div class="menu-btn">
                           <a href="<?php echo esc_url($header_contact_button_url); ?>" class="btn btn-primary"><?php echo esc_html($header_contact_button_text); ?></a>
                        </div> 
                   
                     <?php endif; ?>
                     </div> <!-- End of navbar collapse -->
                  </nav> <!-- End of Nav -->
               </div> <!-- Col End -->
            </div> <!-- Row End -->
         </div> <!-- Container End -->
      </div> <!-- Logo End -->

   </header> <!-- End of Header area-->