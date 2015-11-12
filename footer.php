<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<div id="footer">
  <div id="footer-inner">
  
  <div id="blanck1">
                    <div id="footer-tag-heading">COMPANY</div>
                    <div id="list-footer" class="list-footer"> 
                                  <?php wp_nav_menu( array( 'theme_location' => 'footer_company', 'menu_class' => 'list-footer' ) ); ?>
                     </div></div>
                     
                     <div id="blanck2">
                    <div id="footer-tag-heading">CUSTOMER SUPPORT</div>
                    <div id="list-footer" class="list-footer"> 
                                  <?php wp_nav_menu( array( 'theme_location' => 'customer_support', 'menu_class' => 'list-footer' ) ); ?>
                     </div></div>
                     
                     <div id="blanck1">
                    <div id="footer-tag-heading">SERVICES</div>
                    <div id="list-footer" class="list-footer"> 
                                  <?php wp_nav_menu( array( 'theme_location' => 'footer_service', 'menu_class' => 'list-footer' ) ); ?>
                     </div></div>
                     
                           <div id="blanck2">
                    <div id="footer-tag-heading">TERMS & CONDITION</div>
                    <div id="list-footer" class="list-footer"> 
                                  <?php wp_nav_menu( array( 'theme_location' => 'footer_termscondition', 'menu_class' => 'list-footer' ) ); ?>
                     </div></div>
                     
                               <div id="blanck1">
                    <div id="footer-tag-heading">HELP CENTER</div>
                    <div id="list-footer" class="list-footer"> 
                                  <?php wp_nav_menu( array( 'theme_location' => 'help_center', 'menu_class' => 'list-footer' ) ); ?>
                     </div></div>
                     
                    </div><div style="clear:both;"></div> 
  
  </div>
</div>
</div>

	<?php wp_footer(); ?>
</body>
</html>