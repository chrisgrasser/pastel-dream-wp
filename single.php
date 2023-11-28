<?php get_header(); ?>
<div class="container blog-body">
    <div class="row">
        <div class="col-sm-12">

            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('content-single', get_post_format());

                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif; ?>

                    <!-- find id of current page and the category -->
                    <?php $current = get_the_ID();
                    $current_category = get_the_category($current)[0]->term_id; ?>

                    <h3>Related Posts</h3>
                    <div class="related-posts">
                        <!-- related post feed for four most recent posts in same category (can be adjusted for more but not recommended) -->
                        <?php $related = get_posts(array('category' => $current_category, 'exclude' => $current, 'numberposts' => 4));
                        if (!$related) {
                            # only post in the category
                            echo "None yet!";
                        } else {
                            # populate cards with images, titles, and excerpts
                            for ($i = 0; $i < count($related); $i++) {
                                $post_id = apply_filters('ID', $related[$i]->ID); ?>
                                <div class="related-card">
                                    <?php if (has_post_thumbnail($post_id)) { ?>
                                        <a href="<?php echo get_the_permalink($post_id) ?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?></a>
                                    <?php } else { ?>
                                        <!-- fallback image if no thumbnail -->
                                        <a href="<?php echo get_the_permalink($post_id) ?>"><img class="attachment-thumbnail fallback-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/fallback-image" alt="fallback image"></a>
                                    <?php } ?>
                                    <h4><a href="<?php echo get_the_permalink($post_id) ?>"><?php echo apply_filters('post_title', $related[$i]->post_title); ?></a></h4>
                                    <?php $excerpt = get_the_excerpt($post_id);

                                    # limit the excerpt length for the smaller cards
                                    $excerpt = substr($excerpt, 0, 150);
                                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    echo $result . '...<a href="' . get_the_permalink($post_id) . '">Read more?</a>'; ?>
                                </div>
                        <?php }
                        }
                        ?>
                    </div> <!-- end related post section -->

            <?php endwhile;
            endif;
            ?>

        </div> <!-- /.col -->
    </div> <!-- /.row -->

    <?php get_footer(); ?>