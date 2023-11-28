<div class="blog-post blog-cards">
    <?php # limit excerpt length
    $excerpt = get_the_excerpt();
    $excerpt = substr($excerpt, 0, 250);

    if (has_post_thumbnail()) { ?>
        <div class="categories">
            <?php the_category(); ?>
        </div>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> |
            <a href="<?php comments_link(); ?>">
                <?php
                printf(_nx('1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); ?>
            </a>
        </p>
        <?php echo $excerpt . '...<a href="' . get_the_permalink() . '">Read more?</a>'; ?>
    <?php } else { ?>
        <div class="categories">
            <?php the_category(); ?>
        </div>
        <!-- fallback image in the event of no featured image -->
        <a href="<?php the_permalink(); ?>"><img class="attachment-medium fallback-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/fallback-image" alt="fallback image"></a>
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> |
            <a href="<?php comments_link(); ?>">
                <?php
                printf(_nx('1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); ?>
            </a>
        </p>
        <?php echo $excerpt . '...<a href="' . get_the_permalink() . '">Read more?</a>'; ?>
    <?php } ?>

</div><!-- /.blog-post -->