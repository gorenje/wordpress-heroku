  <section id="postmeta">
    <p>Changed by <? the_author(); ?> on <? the_date(); ?></p>
  </section>
  <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo get_bloginfo( 'template_directory' ) ?>/js/jquery.details.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    jQuery(function(){
      jQuery('details').details();
    })
  </script>
</body>
</html>