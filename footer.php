<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d861124.0491007258!2d-107.482345!3d32.532401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10b1736bb26ca3c5!2sVilla+Custom+Homes%2C+Inc.!5e0!3m2!1sen!2sus!4v1558114060852!5m2!1sen!2sus"
    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
<div id="footer">
    <div id="footer-widgets" class="clearfix">
        <?php
							$footer_sidebars = array('footer-area-1','footer-area-2','footer-area-3');
							if ( is_active_sidebar( $footer_sidebars[0] ) || is_active_sidebar( $footer_sidebars[1] ) || is_active_sidebar( $footer_sidebars[2] ) ) {
								foreach ( $footer_sidebars as $key => $footer_sidebar ){
									if ( is_active_sidebar( $footer_sidebar ) ) {
										echo '<div class="footer-widget' . (  2 == $key ? ' last' : '' ) . '">';
										dynamic_sidebar( $footer_sidebar );
										echo '</div>';
									}
								}
							}
						?>
    </div> <!-- end #footer-widgets -->
</div> <!-- end #footer -->
</div> <!-- end #content -->
</div> <!-- end #wrapper -->

<p id="copyright">
    <?php printf( __('Designed by MacDoctor | %s', 'Trim'), '<a href="http://www.macdoctorlc.com" title=""></a>', '<a href="http://www.wordpress.org">WordPress</a>' ); ?>
</p>
</div> <!-- end #container -->

<?php wp_footer(); ?>
</body>

</html>