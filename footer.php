<footer class="theme_footer">
    <div class="wrapper">
        <div class="top_footer"></div>

        <div class="bottom_footer">

            <div class="social_profiles">
                <?php get_template_part('partials/social_profiles' ); ?>
            </div>

            <div class="footer_logo">
                <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
                    <?php if(ale_get_option('footerlogo')){?>
                        <img src="<?php echo esc_url(ale_get_option('footerlogo')); ?>" alt="logo" title="<?php esc_attr(bloginfo('title')); ?>" />
                    <?php } else { ?>
                        <h6><?php esc_attr(bloginfo('title')); ?></h6>
                    <?php } ?>
                    <span class="logo_title">
                        <?php if(ale_get_option('header_logo_label_top')){
                            echo '<span class="title_logo_top">'.esc_attr(ale_get_option('header_logo_label_top')).'</span>';
                        } ?>
                        <?php if(ale_get_option('header_logo_label_bottom')){
                            echo '<span class="title_logo_bottom">'.esc_attr(ale_get_option('header_logo_label_bottom')).'</span>';
                        } ?>
                    </span>
                </a>
            </div>

            <div class="item_copyrights">
                <?php echo ( ale_get_option('copyrights') ) ? ale_get_option('copyrights') : "© Copyrights Reserved"; ?>
            </div>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>