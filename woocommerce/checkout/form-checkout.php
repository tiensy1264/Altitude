<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="section-woocommerce mt-50">
    <div class="container">

        <div class="section-checkout mt--140">

            <?php
            do_action('woocommerce_before_checkout_form', $checkout);

            // If checkout registration is disabled and not logged in, the user cannot checkout.
            if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
                echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
                return;
            } ?>

            <form name="checkout" method="post" class="checkout woocommerce-checkout mt-30"
                  action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

                <div class="row justify-content-between">
                    <?php if ($checkout->get_checkout_fields()) : ?>

                        <div class="col-lg-6">

                            <?php do_action('woocommerce_checkout_before_customer_details'); ?>

                            <div class="form-container" id="customer_details">
                                <div class="billing-container">
                                    <?php do_action('woocommerce_checkout_billing'); ?>
                                </div>

                                <div class="shipping-container mt--40">
                                    <?php do_action('woocommerce_checkout_shipping'); ?>
                                </div>
                            </div>

                            <?php do_action('woocommerce_checkout_after_customer_details'); ?>

                        </div>

                    <?php endif; ?>

                    <div class="col-lg-5 mt-lg-0 mt--50">
                        <div class="order-container">

                            <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>

                            <h3 id="order_review_heading"
                                class="checkout__title"><?php esc_html_e('Your order', 'woocommerce'); ?></h3>

                            <?php do_action('woocommerce_checkout_before_order_review'); ?>

                            <div id="order_review" class="woocommerce-checkout-review-order mt--50">
                                <?php do_action('woocommerce_checkout_order_review'); ?>
                            </div>

                            <?php do_action('woocommerce_checkout_after_order_review'); ?>

                        </div>
                    </div>

                </div>

            </form>

            <?php do_action('woocommerce_after_checkout_form', $checkout); ?>

        </div>
    </div>
</section>