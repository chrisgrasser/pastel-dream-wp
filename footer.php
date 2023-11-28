</div> <!-- /.container -->

<footer class="blog-footer">
    <div class="container">
        <div class="row ps-md-0 ps-xs-4 ps-4">
            <div class="col-md-3 col-xs-6 col-6">
                <h4>Tags</h4>
                <ol class="list-unstyled tag-cloud">
                    <?php $tags = get_tags(); ?>
                    <?php foreach ($tags as $tag) { ?>
                        <li><a href="<?php echo get_tag_link($tag->term_id); ?> " rel="tag"><?php echo $tag->name; ?></a></li>
                    <?php } ?>
                </ol>
            </div>
            <div class="col-md-3 col-xs-6 col-6">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
                    <li><a href="<?php echo get_option('tumblr'); ?>">Tumblr</a></li>
                    <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
                </ol>
            </div>
            <div class="col-md-3 col-xs-6 col-6">
                <h4>Categories</h4>
                <ol class="list-unstyled">
                    <?php $categories = get_categories(); ?>
                    <?php foreach ($categories as $category) { ?>
                        <li><a href="<?php echo get_category_link($category->term_id); ?> " rel="category"><?php echo $category->name; ?></a></li>
                    <?php } ?>
                </ol>
            </div>
            <div class="col-md-3 col-xs-6 col-6">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <?php wp_get_archives('type=monthly'); ?>
                </ol>
            </div>
        </div>
        <div class="row mx-md-0 mx-xs-3 mx-3">
            <div class="col-sm-9 col-xs-12 col-12 ps-0">
                <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://chrisgrasser.github.io/">Chris Grasser</a>.</p>
            </div>
            <div class="col-sm-3 col-xs-12 col-12 mt-sm-0 mt-xs-4 mt-4 text-end">
                <p>
                    <a class="back-top-btn" href="#">Back to top</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(function() {
        jQuery('#main-menu').smartmenus({});
    });
</script>
</body>

</html>