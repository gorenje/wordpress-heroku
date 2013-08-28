
  <header id="header">
    <h1><?php the_title(); ?></h1>
    <p>{{ meta.description }}</p>
  </header>
  <section id="content">
    <div class="inner">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
      <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
  </section>