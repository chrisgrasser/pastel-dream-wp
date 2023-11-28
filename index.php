<?php get_header(); ?>
<p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
<div class="container blog-body">
  <div class="row">
    <div class="col-md-9 col-12 blog-main">
      <?php
      if (have_posts()) : while (have_posts()) : the_post();
          get_template_part('content', get_post_format());
        endwhile; ?>

        <nav class="pager-box">
          <ul class="pager">
            <li><?php previous_posts_link('Previous'); ?></li>
            <li><?php next_posts_link('Next'); ?></li>
          </ul>
        </nav>

      <?php endif; ?>
    </div> <!-- /.blog-main -->
    <?php get_sidebar(); ?>
  </div> <!-- /.row -->
  <?php get_footer(); ?>