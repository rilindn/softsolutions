<?php dynamic_sidebar( 'footer' );  ?>
<footer class="site-footer">
    <div class="main-container">
        <div class="top-container">
             <?php dynamic_sidebar('follow-footer'); ?>
              <?php dynamic_sidebar('headquarter-footer'); ?>
         </div>
         <div class="bottom-container">
             <?php printf( esc_html__( '© Soft Solutions 2022, All Rights Reserved', 'softsolutions' ) ); ?>
         </div>
    </div>
    <?php wp_footer()?>
</footer>
</body>
</html>