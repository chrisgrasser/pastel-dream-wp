<!-- breadcrumb -->
<?php if (has_category()) { ?> <!-- check for category -->
    <div class="breadcrumb-trail">
        <a href="<?php echo get_bloginfo('wpurl') ?>">Home</a> /
        <?php echo the_category(' ') ?> /
        <?php echo the_title() ?>
    </div>
<?php } elseif (has_post_parent()) { # check for parent page
    $parent = wp_get_post_parent_id(get_the_ID()); ?> <!-- find parent page id -->
    <div class="breadcrumb-trail">
        <a href="<?php echo get_bloginfo('wpurl') ?>">Home</a> /
        <a href="<?php echo get_permalink($parent) ?>"><?php echo get_the_title($parent) ?></a> /
        <?php echo the_title() ?>
    </div>
<?php } else { ?>
    <div class="breadcrumb-trail">
        <a href="<?php echo get_bloginfo('wpurl') ?>">Home</a> /
        <?php echo the_title() ?>
    </div>
<?php } ?> <!-- end of breadcrumb -->
<div class="blog-post single">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php the_author_url(); ?>"><?php the_author(); ?></a></p>
    <p class="tags"><?php the_tags(); ?></p>
    <?php if (has_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>
        <hr>
    <?php } ?>
    <?php the_content(); ?>
</div><!-- /.blog-post -->