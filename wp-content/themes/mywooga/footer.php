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
</body>
</html>