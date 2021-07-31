<?php
/**
* Template Name: Our Sectors
*
* @package WordPress
* @subpackage Coelix
* @since Coelix 1.0
*/
get_header();
?>
<div class="content-container our-sectors">
	<div class="inner-container">
	   <h2>Our Sectors</h2>
     <div class="sectors-container">
       <div class="sector-item">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="back-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="front-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="circle">
         <h3 class="item-name">Private Equity</h3>
       </div>
       <div class="sector-item">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="back-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="front-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="circle">
         <h3 class="item-name">Innovation</h3>
       </div>
       <div class="sector-item">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="back-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="front-image">
         <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="circle">
         <h3 class="item-name">Real Estate</h3>
       </div>
     </div>
     <span>drag or scroll to discover</span>
     <img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" class="circle">
	</div>
	<div class="bottom-line">
	    <img class="aurec-img" src="<?= get_bloginfo('template_url') ?>/assets/images/Aurec.svg" alt="">
	    <img class="blue-img" src="<?= get_bloginfo('template_url') ?>/assets/images/blue_bottom.svg" alt="">
	    <img class="white-img" src="<?= get_bloginfo('template_url') ?>/assets/images/white_bottom.svg" alt="">
	</div>
</div>
<?php
get_footer();

?>
