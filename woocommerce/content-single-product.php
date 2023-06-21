<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product; ?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
<?php if ((!empty(tr_options_field('theme_options.background_banner_shop_detail'))) || (!empty(tr_options_field('theme_options.sub_title_banner_shop_detail'))) || (!empty(tr_options_field('theme_options.title_banner_shop_detail')))) { ?>
    <section class="section-banner">
        <div class="container">
            <div class="banner text-center"<?php if(!empty(tr_options_field('theme_options.background_banner_shop_detail'))){ ?> style="background: url(<?= wp_get_original_image_url(tr_options_field('theme_options.background_banner_shop_detail'),'full')?>) no-repeat center;; background-size: cover;"<?php } ?>>
            <?php if(!empty(tr_options_field('theme_options.sub_title_banner_shop_detail'))){ ?>
                <div class="sub-title-al color--white"><?= tr_options_field('theme_options.sub_title_banner_shop_detail') ?></div>
                <?php }if(!empty(tr_options_field('theme_options.title_banner_shop_detail'))){ ?>
                <div class="title-al color--white"><?= tr_options_field('theme_options.title_banner_shop_detail') ?></div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
    <section class="section-product-summary pt-lg-120 pt-100">
        <div class="container">
            <?php
            /**
             * Hook: woocommerce_before_single_product.
             *
             * @hooked woocommerce_output_all_notices - 10
             */
            do_action('woocommerce_before_single_product');

            if (post_password_required()) {
                echo get_the_password_form(); // WPCS: XSS ok.
                return;
            } ?>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action('woocommerce_before_single_product_summary');
                    ?>
                </div>
                <div class="col-lg-6 mt-lg-0 mt--50">
                    <div class="summary entry-summary">
                        <?php
                        /**
                         * Hook: woocommerce_single_product_summary.
                         *
                         * @hooked woocommerce_template_single_title - 5
                         * @hooked woocommerce_template_single_rating - 10
                         * @hooked woocommerce_template_single_price - 10
                         * @hooked woocommerce_template_single_excerpt - 20
                         * @hooked woocommerce_template_single_add_to_cart - 30
                         * @hooked woocommerce_template_single_meta - 40
                         * @hooked woocommerce_template_single_sharing - 50
                         * @hooked WC_Structured_Data::generate_product_data() - 60
                         */
                        do_action('woocommerce_single_product_summary');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
    ?>
   <?php if(!empty(tr_posts_field('button'))){ ?>
   <div class="container mt-50 pb-lg-120 pb-100">
        <a class="btn " target="_blank" href="<?= tr_posts_field('link') ?>"><?= tr_posts_field('button') ?></a>
    </div>
    <?php } ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>