<?php
/*
  * Template name: Contact Template
  * */

get_header(); ?>
    <section class="site_container">
        <div class="page_heading contacts_top_box_template">
            <h2 class="page_title contacts_title"><?php the_title(); ?></h2>
        </div>
        <!-- Content -->
        <div class="story contact_template cf">
            <div class="wrapper contact_blocks">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="text_info">
                        <div class="content_box">
                            <?php the_content(); ?>
                        </div>
                        <?php if(ale_get_meta('phone_number')){?>
                            <div class="phone_box">
                                <div class="box_conteiner">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <?php if(ale_get_meta('phono_label')){?>
                                        <span class="phono_label labels"><?php echo esc_attr(ale_get_meta('phono_label')); ?></span>
                                    <?php } ?>
                                    <span class="phone_number box_data"><?php echo esc_attr(ale_get_meta('phone_number')); ?></span>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if(ale_get_meta('your_email')){?>
                            <div class="email_box">
                                <div class="box_conteiner">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <?php if(ale_get_meta('email_label')){?>
                                        <span class="email_label labels"><?php echo esc_attr(ale_get_meta('email_label')); ?></span>
                                    <?php } ?>
                                    <span class="your_email box_data"><?php echo esc_attr(ale_get_meta('your_email')); ?></span>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if(ale_get_meta('your_address')){?>
                            <div class="address_box">
                                <div class="box_conteiner">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                    <?php if(ale_get_meta('address_label')){?>
                                        <span class="address_label labels"><?php echo esc_attr(ale_get_meta('address_label')); ?></span>
                                    <?php } ?>
                                    <span class="your_address box_data"><?php echo ale_wp_kses(ale_get_meta('your_address')); ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="form_container">
                        <?php if(ale_get_meta('contact_title')){ ?><h3 class="form_title"><?php echo esc_attr(ale_get_meta('contact_title')) ?></h3><?php } ?>
                        <?php if(ale_get_meta('contact_description')){ ?><p class="form_description"><?php echo esc_attr(ale_get_meta('contact_description')) ?></p><?php } ?>

                        <form method="post" action="<?php the_permalink();?>" class="contact_page_form">
                            <div class="field">
                                <input name="contact[name]" type="text" placeholder="<?php esc_html_e('Ім\'я','gardener'); ?>" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            </div>
                            <div class="field">
                                <input name="contact[email]" type="email" placeholder="<?php esc_html_e('E-mail','gardener'); ?>" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            </div>
                            <div class="field">
                                <textarea name="contact[message]"  placeholder="<?php esc_html_e('Текст...','gardener'); ?>" id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            </div>
                            <span class="activity_work_button_link">
                                <input type="submit" class="submit" value="<?php esc_html_e('Отправить', 'gardener')?>"/>
                            </span>
                            <?php wp_nonce_field() ?>
                        </form>
                    </div>

                    <div class="map_container">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5140.883688725955!2d28.597945423326827!3d49.890507560360604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472cfbd18acd262f%3A0xd00a6a21edf962a!2z0YPQuy4g0JXQstGA0L7Qv9C10LnRgdC60LDRjywgMTA2LCDQkdC10YDQtNC40YfQtdCyLCDQltC40YLQvtC80LjRgNGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAxMzMwMA!5e0!3m2!1sru!2sua!4v1597130977974!5m2!1sru!2sua" width="500" height="576" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!--                            --><?php //echo do_shortcode('[ale_map address="'.strip_tags(ale_get_meta('your_address')).'" width="100%" height="780px"]'); ?>
                        </div>
                    </div>


                <?php endwhile; else: ?>
                    <?php get_template_part('partials/notfound')?>
                <?php endif; ?>


                <?php if (comments_open()) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>