<section class="section-rooftop">
    <div class="container">
        <div class="rooftop">
            <div class="row">
                <div class="col-lg-5">
                <div class="top">
                <?php if(!empty($data['sub_title'])){ ?>
                <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                <?php }  if(!empty($data['title'])){?>
                <div class="title-al_smaller mt-10 max"><?= $data['title'] ?></div>
                <?php } ?>
            </div>
                </div>
            </div>
            <?php
           $the_query = new WP_Query(
            array(
              'paged' => get_query_var('paged'),
              'post_type'=> 'post',
              'post_status' => 'publish',
              'posts_per_page' => 6,
          ));
          if ($the_query->have_posts()) {
            ?>
            <div class="row row-gap--30 mt-50 items-rooftop">
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                <div class="col-lg-4 col-sm-6 item-rooftop">
                    <div class="item-post">
                        <div class="img-wrapper--cover aspect-ratio--4-3 hover--scale overflow-hidden">
                            <?= get_the_post_thumbnail() ?>
                        </div>
                        <div class="content mt-30">
                        <div class="fs-26 font--oswald fw-medium color--primary line-limit--1">
                            <?= get_the_title() ?>
                        </div>
                        <div class="fs-26 font--oswald fw-medium color--primary line-limit--1">
                        <?= tr_posts_field('time_title')?>
                        </div>
                            <div class="line-limit--4 mt-15"><?= get_post_field('post_content'); ?></div>
                            <a class="btn-arrow mt-30" target="_blank" href="<?= tr_posts_field('link') ?>">View Menu</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <div class="mt-75 pagi text-center">
                <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                'base'=>str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'=>'?paged=%#%',
                'prev_text'=>(' Previous'),
                'next_text'=>('Next '),
                'current'=>max( 1, get_query_var('paged') ),
                'total'=>$the_query->max_num_pages
                ) );
                ?>
            </div>
        </div>
    </div>
</section>