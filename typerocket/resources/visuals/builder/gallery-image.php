<section class="section-villa">
    <div class="container">
        <div class="villa">
            <?php if(!empty($data['text_center'])){ ?>
            <div class="text-center">
             <?php } ?>   
            <?php if(!empty($data['sub_title'])){ ?>
            <div class="sub-title-al"><?= $data['sub_title'] ?></div>
            <?php }if(!empty($data['title'])){ ?>
            <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
            <?php }if(!empty($data['text_center'])){ ?>
            </div>
            <?php }if (!empty($data['search_gallery'])) {
                ?>
            <div class="content mt-50 items-gallery">
            <?php
                $args = array();
                $args['post_type'] = 'gallery';
                $args['posts_per_page'] = 6;
                $args['paged'] = get_query_var('paged');

                $args['tax_query'] =  array(
                array(
                'taxonomy' => 'category_gallery',
                'field' => 'term_id',
                'terms' => $data['search_gallery'],
                )
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="img-wrapper--cover image-villa">
                <?= wp_get_attachment_image( tr_posts_field('image'), 'large') ?>
                </div>
                <?php }wp_reset_query(); ?>
            </div>
            <?php } ?>
            <div class="btn-group paginationPost ">
            <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                'base'=>str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'=>'?paged=%#%',
                'prev_text'=>(' Previous'),
                'next_text'=>('Next '),
                'current'=>max( 1, get_query_var('paged') ),
                'total'=>$the_query->max_num_pages
                ) );?>
          </div>
        </>
    </div>
</section>