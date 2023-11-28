<div class="col-md-3 blog-sidebar">
    <div class="sidebar-module-outset">
        <div class="sidebar-module">
            <h4>Search</h4>
            <?php get_search_form(); ?>
        </div>
        <div class="sidebar-module">
            <h4>Categories</h4>
            <ol class="list-unstyled">
                <?php $categories = get_categories(); ?>
                <?php foreach ($categories as $category) { ?>
                    <li><a href="<?php echo get_category_link($category->term_id); ?> " rel="category"><?php echo $category->name; ?></a></li>
                <?php } ?>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <?php wp_get_archives('type=monthly'); ?>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled tag-cloud">
                <?php $tags = get_tags(); ?>
                <?php foreach ($tags as $tag) { ?>
                    <li><a href="<?php echo get_tag_link($tag->term_id); ?> " rel="tag"><?php echo $tag->name; ?></a></li>
                <?php } ?>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
                <li><a href="<?php echo get_option('tumblr'); ?>">Tumblr</a></li>
                <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- /.blog-sidebar -->