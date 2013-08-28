<?php get_header(); ?>

<section id="content">
  <div class="inner">

    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>

  </div>
</section>

<?php get_footer(); ?>