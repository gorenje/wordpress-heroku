  <section id="postmeta">
    <p>Changed by <? the_author(); ?> on <? the_date(); ?></p>
  </section>
  <footer id="footer">
    <div class="inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      <a href="<?php echo wp_logout_url( $redirect ); ?>" rel="logout">Logout</a>
    </div>
  </footer>
  <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo get_bloginfo( 'template_directory' ) ?>/js/jquery.details.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    jQuery(function(){
      jQuery('details').details();
    })
  </script>
</body>
</html>