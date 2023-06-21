<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

if (tr_posts_field("use_builder") == '1') {
    tr_components_field('builder');
} else {
    
    while (have_posts()) : the_post();
        ?>
        <section class="section-standard-page py-lg-120 py-100 overflow-hidden">
            <div class="container">
                <?php if(!is_wc_endpoint_url( 'order-received' )){ ?>
                <div class="fs-60 font--oswald text-capitalize text-center">
                    <?php the_title() ?>
                </div>
                    <?php } ?>
                <?php the_content() ?>
            </div>
        </section>
    <?php
    endwhile;
}

get_footer();