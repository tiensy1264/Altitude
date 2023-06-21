<?php

require('typerocket/init.php');
require('inc/init.php');

add_theme_support( 'post-thumbnails' );


add_action('wp_enqueue_scripts', 'our_enqueue_styles', 99999);
function our_enqueue_styles()
{
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), rand(), 'all');
    wp_enqueue_style('fancybox-style', get_template_directory_uri() . '/assets/css/fancybox.css', array(), rand(), 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), rand(), 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), rand(), 'all');
}

add_action('wp_enqueue_scripts', 'our_enqueue_scripts', 1);
function our_enqueue_scripts()
{
   wp_enqueue_script('jquery-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js', array(), rand(), true);
   wp_enqueue_script('jquery-waypoint-scripts', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), rand(), true);
   wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), rand(), true);
   wp_enqueue_script('countup-scripts', get_template_directory_uri() . '/assets/js/jquery.countup.js', array(), rand(), true);
   wp_enqueue_script('countup-min-scripts', get_template_directory_uri() . '/assets/js/jquery.countup.min.js', array(), rand(), true);
   wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), rand(), true);
   wp_enqueue_script('fancybox-scripts', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array(), rand(), true);
   wp_enqueue_script('cookie-scripts', get_template_directory_uri() . '/assets/js/js.cookie.min.js', array(), rand(), true);
   wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), rand(), true);
}


// ------------ MENU --------------
// Get menu items with multiple levels
function get_menu_items_by_slug($slug): array
{
    // Get all registered menu locations
    $menu_locations = get_nav_menu_locations();
    // Attempt to get the specified menu object based on its slug (if it exists)
    $menu_object = (isset($menu_locations[$slug]) ? wp_get_nav_menu_object($menu_locations[$slug]) : null);
    // Get all menu items associated with the specified menu object (if it exists)
    $menu_items = ($menu_object ? wp_get_nav_menu_items($menu_object->term_id) : array());

    // Create an empty array to store the final output
    $menu_array = array();

    // Loop through all menu items and identify the top-level items (those without a parent)
    foreach ($menu_items as $item) {
        if (!$item->menu_item_parent) {
            // If a top-level item is found, add it to the output array with all of its available properties
            $menu_array[$item->ID] = (array)$item;
            $menu_array[$item->ID]['children'] = get_menu_item_children($item, $menu_items);
        }
    }

    // Return the completed menu array
    return $menu_array;
}

function get_menu_item_children($parent_item, $menu_items): array
{
    $children = array();

    // Loop through all menu items and find the ones that have the current item as their parent
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == $parent_item->ID) {
            // If a child item is found, add it to the "children" sub-array with all of its available properties
            $child = (array)$item;
            $child['children'] = get_menu_item_children($item, $menu_items);
            $children[] = $child;
        }
    }

    // Return the completed children array
    return $children;
}

function wings_register_menus(): void
{
    $locations = array(
        'main-menu' => __('Main Menu', 'wings'),
        'bottom-menu' =>__('Bottom Menu','wings'),
        'footer-menu' => __('Footer Menu', 'wings')
    );

    register_nav_menus($locations);
}


add_action('init', 'wings_register_menus');
function wp_cookies_popup() {
 
// Check if cookie is already set
if(!isset($_COOKIE['wp_visit_time_popup'])) {

	if(!empty(tr_options_field('theme_options.turn_on'))){
    $days =  tr_options_field('theme_options.days')>0 ? tr_options_field('theme_options.days') : 1;
    $popup_img =   wp_get_original_image_url(tr_options_field('theme_options.image_popup'),'full');
    $popup_title =  tr_options_field('theme_options.title_popup');
    $popup_content =  tr_options_field('theme_options.items_popup');
    $popup_button =  tr_options_field('theme_options.button_popup');
    $popup_button_link =  tr_options_field('theme_options.button_popup_;link');
	
?>
 <div class="modal fade modal-element pop-up" id="welcomeModal" tabindex="-1" role="dialog" data-days="<?php echo $days; ?>">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content py-50 px-30 py-lg-0 px-lg-0">
          <div class="modal-body p-0">
          <div class="close-btn close" data-bs-dismiss="modal"><img src="<?= get_template_directory_uri(  ) ?>/assets/icons/close.png" /></div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <?php if ($popup_img) {
                  echo '<div class="img-wrapper--cover image-pop-up"><img class="w-100" src="' . $popup_img . '" /></div>';
                } ?>
              </div>
              <div class="col-lg-6 col-12">
                <div class="info-modal d-flex justify-content-center flex-column">
                <?php if (!empty($popup_title)) : ?>
								<div class="fs-55 font--oswald color--primary"><?php echo $popup_title; ?></div>
                <?php endif; ?>
                <?php if(!empty($popup_content)) : ?>
								<div class="box-content d-flex flex-column gap-30 mt-30">
                  <?php foreach($popup_content as $item) : ?>
									<div class="item">
										<div class="fs-26 fw-medium color--primary font--oswald"><?= $item['title'] ?></div>
										<div class="mt-10">
                    <?= wpautop($item['description']) ?>
										</div>
									</div>
                  <?php endforeach; ?>
								</div>
                <?php endif; ?>
                <?php if(!empty($popup_button)) : ?>
								<a href="<?php echo $popup_button_link ?>" class="btn mt-50 w-fit-content"><?php echo $popup_button ?></a>
                <?php endif; ?>
							</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
	}
}
}
add_theme_support('woocommerce');

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



