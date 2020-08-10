<?php
/*
  * Template name: Homepage Template
  * */
get_header();
?>

<section class="site_container">
    <div class="home_header_container">

        <div class="kapi_slick_header">
            <div class="img_box">
                <img src="<?php echo get_template_directory_uri(). '\css\images\01.jpg'; ?>" alt="">
            </div>
            <div class="img_box">
                <img src="<?php echo get_template_directory_uri(). '\css\images\05.jpg'; ?>" alt="">
            </div>
            <div class="img_box">
                <img src="<?php echo get_template_directory_uri(). '\css\images\08.jpg'; ?>" alt="">
            </div>
            <div class="img_box">
                <img src="<?php echo get_template_directory_uri(). '\css\images\11.jpg'; ?>" alt="">
            </div>
        </div>

        <div class="title_header_box">
            <?php if( ale_get_meta( 'top_heading_home_page')){ ?>
                <p class="top_heading_home_page"><?php esc_attr_e( ale_get_meta( 'top_heading_home_page')); ?></p>
            <?php } ?>
            <?php if( ale_get_meta( 'heading_home_page')){ ?>
                <p class="heading_home_page"><?php esc_attr_e( ale_get_meta( 'heading_home_page')); ?></p>
            <?php } ?>
            <?php if( ale_get_meta( 'activity_work_button_link')){ ?>
                <span class="activity_work_button_link">
                    <a href="<?php echo esc_url( ale_get_meta( 'activity_work_button_link')); ?>">
                    <?php if( ale_get_meta( 'activity_work_button_title')){ esc_attr_e( ale_get_meta( 'activity_work_button_title')); } else { esc_attr_e('Дізнатися більше'); } ?>
                    </a>
                </span>
            <?php } ?>
        </div>

    </div>

    <!-- Leader Mission -->
    <?php if( ale_get_meta( 'leader_mission_form') == 'show' ){ ?>
        <div class="leader_mission_container cf wrapper">

            <?php if ( ale_get_meta( 'mission_leader_box_title' )) { ?>
                <h2 class="leader_mission_title"><?php esc_attr_e( ale_get_meta( 'mission_leader_box_title', 'seedofhope' )); ?></h2>
            <?php } ?>

            <div class="leader_box">
                <?php if ( ale_get_meta( 'mission_leader_image' )) { ?>
                    <div class="img_box">
                        <img src="<?php echo esc_url( ale_get_meta( 'mission_leader_image' )); ?>" alt="leader">
                    </div>
                <?php } ?>
                <div class="description_box">
                    <?php if ( ale_get_meta( 'mission_leader_description' )) { ?>
                        <p class="leader_mission_description"><?php esc_attr_e( ale_get_meta( 'mission_leader_description', 'seedofhope' )); ?></p>
                    <?php } ?>
                    <?php if ( ale_get_meta( 'mission_leader_signature' )) { ?>
                        <span class="signature"><?php esc_attr_e( ale_get_meta( 'mission_leader_signature', 'seedofhope' )); ?></span>
                    <?php } ?>
                </div>
            </div>

        </div>
    <?php } ?><!-- // Leader Mission -->

    <!--  Active Work -->
    <?php if( ale_get_meta( 'active_work_box') == 'show' ){ ?>
    <div class="active_work_container cf">

        <?php if ( ale_get_meta( 'active_work_box_title' )) { ?>
            <h2 class="active_work_box_title"><?php esc_attr_e( ale_get_meta( 'active_work_box_title', 'seedofhope' )); ?></h2>
        <?php } ?>

        <?php
        $args = array(
            'post_type' => 'activity_work',
            'orderby' => 'parent',
            'order'   => 'ASC',
            'posts_per_page' => 5
        );
        $activity_work = new WP_Query($args);
        $i = 0;
        if ($activity_work->have_posts()) : while ( $activity_work->have_posts()) : $activity_work->the_post();
        $i++; ?>

        <div class="work_common_container work_item_container-<?php echo $i; ?>"<?php if( $i == 3 ){ ?>
                 style="background:url('<?php echo esc_url(ale_get_meta( 'activity_work_background_image' )); ?>') no-repeat; background-size: cover;"<?php } ?>>

            <div class="wrapper">
                <span class="number"><?php echo ( $i < 9 ) ? '0'.$i : $i; ?></span>

                <div class="content_of_item">

                    <div class="left">
                        <h3 class="active_work_title"><?php the_title(); ?></h3>
                        <?php if( ale_get_meta( 'activity_work_subtitle')){ ?>
                            <span class="active_work_subtitle"><?php esc_attr_e( ale_get_meta( 'activity_work_subtitle')); ?></span>
                        <?php } ?>

                        <?php if( $i != 5 ){ ?>
                            <?php if( ale_get_meta( 'activity_work_short_description')){ ?>
                                <span class="content"><?php esc_attr_e( ale_get_meta( 'activity_work_short_description')); ?></span>
                            <?php } ?>

                            <span class="activity_work_button_link">
                                <a href="<?php the_permalink();?>"><?php esc_attr_e('Дізнатися більше', 'seedofhope');?></a>
                            </span>
                        <?php } ?>
                    </div>

                    <div class="right">
                        <?php if ( $i == 4 || $i == 5 ) { echo '<div class="box_for_images">'; ?>
                            <div class="img_1"><img src="<?php echo esc_url( ale_get_meta( 'activity_work_background_image' )); ?>" alt="img_1_bg"></div>
                        <?php if ( $i == 5 ) { ?>
                                <div class="img_2"><img src="<?php echo esc_url( ale_get_meta( 'activity_work_small_image' )); ?>" alt="img_2"></div>
                        <?php }} ?>
                            <div class="img_3"><?php the_post_thumbnail(); ?></div>
                        <?php echo ( $i == 4 || $i == 5 ) ? '</div>' : ''; ?>
                    </div>

                    <?php if( $i == 5 ){ ?>
                    <div class="left bottom_part">
                        <?php if( ale_get_meta( 'activity_work_short_description')){ ?>
                            <span class="content"><?php esc_attr_e( ale_get_meta( 'activity_work_short_description')); ?></span>
                        <?php } ?>

                        <span class="activity_work_button_link">
                            <a href="<?php the_permalink();?>"><?php esc_attr_e('Дізнатися більше', 'seedofhope');?></a>
                        </span>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <?php  ?>
        <?php endwhile; endif; wp_reset_query(); ?>












    </div>
    <?php } ?><!-- // Active Work -->

    <!--  Subscribe -->
    <?php if( ale_get_meta( 'subscribe_box') == 'show' ) { ?>

<!--        Subscribe Box               -->

    <?php } ?><!-- // Subscribe -->







    </div>
</section>

<?php get_footer(); ?>