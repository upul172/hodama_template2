<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="red-area">
    <div id="red-inner">
            <?php
            $args = array (
                'post_type'              => 'homereservation',    
                'order'                  => 'ASC',
                'posts_per_page'         => '3',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
            
            ?>
               <div id="first">
                        <center>
                            <div id="image"><?php echo the_post_thumbnail(); ?></div>
                        </center>
                            <div id="text"><span class="make-reserv"><?php echo $query->post->post_title;?></span><br />
                            <?php echo $query->post->post_content;?></div>
                        <center>
                        <div id="read-more"><a href="#">Read-more</a></div>
                        </center>
               </div>
               <?php } } ?>

<div style="clear:both;"></div> 
</div>
</div>

<div id="grey-part">
<div id="grey-inner">
  
  <form action="" method="get">
  <div id="select">
  <select name="car" class="select" placeholder:"select a car">
  <option>Select type of car</option>
  <option>Maruti</option>
   <option>Indica</option>
    <option>BMW</option>
     <option>Ford</option>
  </select>
  </div>
  
   <div id="select">
  <select name="car" class="select" placeholder:"select a car">
  <option>Select brand of car</option>
  <option>Maruti</option>
   <option>Indica</option>
    <option>BMW</option>
     <option>Ford</option>
  </select>
  </div>
  
   <div id="select">
  <select name="car" class="select" placeholder:"select a car">
  <option>Select model of car</option>
  <option>Maruti</option>
   <option>Indica</option>
    <option>BMW</option>
     <option>Ford</option>
  </select>
  </div>
  
  <div id="search"><input name="search" type="button" class="search-field" value="search"/>
  </div>
  <div style="clear:both;"></div> 
  
  </form>
  
</div>
</div>

<div id="contant">
  <div id="contant-inner">FEATURED CARS</div>
      <div id="contant-inner-cars">
   <?php echo do_shortcode('[print_thumbnail_slider]'); ?>
    </div>
    
</div>
         <?php
            $args = array (
                'post_type'              => 'homecardetail',    
                'order'                  => 'ASC',
                'posts_per_page'         => '1',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
            
            ?>
<div id="big-car-view">
     <div id="car-png"><?php echo the_post_thumbnail(); ?></div>
        <div id="car-detail"><span class="make-reserv"><?php echo $query->post->post_title;?></span><br />
                    <?php echo $query->post->post_content;?>
      <div id="read-more"><a href="#">Read-more</a></div>
  </div>
<div style="clear:both;"></div> 
</div><?php } } ?>

<div id="contact-area">
<div id="contact-inner">

<div id="contact-form">CONTACT FORM
   <?php echo do_shortcode ('[contact-form-7 id="42" title="my form"]'); ?>

</div>
<div id="soacial-media"><?php dynamic_sidebar ('sidebar-6'); ?><br /><br />
                    <span class="social">GET SOCIAL</span><br />
                     <?php echo do_shortcode ('[cn-social-icon]'); ?>
  </div>
  
<div style="clear:both;"></div> 
</div>

</div>

<div id="subscribe">
<div id="sub-part">
  <div id="sub-left">
  <form action="" method="get">
  <div id="space">Sbuscribe TO E-mail</div>
  <div id="mail-part"><a href="#"><img src="<?php bloginfo ('template_url'); ?>/image/email-icon_03.png" width="48" height="31" hspace="8" /></a></div>
   <?php dynamic_sidebar ('sidebar-7'); ?>
   <div id="book"><?php dynamic_sidebar ('sidebar-8'); ?></div>
   <div id="store"><?php dynamic_sidebar ('sidebar-9'); ?></div>
   <div style="clear:both;"></div> 
 
  </form>
  </div>
</div>
</div>

<?php
//get_sidebar();
get_footer();
