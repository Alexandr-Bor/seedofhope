<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
    <!--  Cache Control  -->
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body <?php body_class(); ?> >
000000000000000000000000000000011111111111111
<header class="header_box">
    <div id="header_top_line">
        <div class="logo_nav_container wrapper">

            <div class="logo_box">
                <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
                    <?php if(ale_get_option('sitelogo')){?>
                        <img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" title="<?php esc_attr(bloginfo('title')); ?>" />
                    <?php } else { ?>
                        <h1><?php esc_attr(bloginfo('title')); ?></h1>
                    <?php } ?>
                    <div class="logo_title">
		                <?php if(ale_get_option('header_logo_label_top')){
			                echo '<span class="title_logo_top">'.esc_attr(ale_get_option('header_logo_label_top')).'</span>';
		                } ?>
		                <?php if(ale_get_option('header_logo_label_bottom')){
			                echo '<span class="title_logo_bottom">'.esc_attr(ale_get_option('header_logo_label_bottom')).'</span>';
		                } ?>
                    </div>
                </a>
            </div>

            <?php if ( has_nav_menu( 'header_menu' ) ) { ?>
                <div class="navigation_container">
                    <nav class="navigation_items">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'=> 'header_menu',
                            'menu'			=> 'Header Menu',
                            'menu_class'	=> 'menu menu-header',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        )); ?>
                    </nav>
                </div>
            <?php } ?>
        </div>
    </div>


<!--    <section class="breadcrumbs_section">-->
<!--        <div class="breadcrumbs_line">-->
<!--            <div class="left_line_bread"></div>-->
<!--            --><?php //echo ale_get_breadcrumbs(); ?>
<!--            <div class="right_line_bread"></div>-->
<!--        </div>-->
<!--    </section>-->



</header>



