<?php 
get_header();
?>
<?php if((!empty(tr_options_field('theme_options.background_banner_what_on'))) || (!empty(tr_options_field('theme_options.sub_title_banner_what_on'))) || (!empty(tr_options_field('theme_options.title_banner_what_on')))) {?>
<section class="section-banner">
    <div class="container">
        <div class="banner text-center" <?php if(!empty(tr_options_field('theme_options.background_banner_what_on'))){ ?> style="background: url(<?= wp_get_original_image_url(tr_options_field('theme_options.background_banner_what_on'),'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
        <?php if(!empty(tr_options_field('theme_options.sub_title_banner_what_on'))){ ?>
            <div class="sub-title-al color--white"><?= tr_options_field('theme_options.sub_title_banner_what_on')  ?></div>
            <?php }if(!empty(tr_options_field('theme_options.title_banner_what_on'))){ ?>
            <div class="title-al color--white"><?= tr_options_field('theme_options.title_banner_what_on')  ?></div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<?php
$the_query = new WP_Query(
    array(
        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
        'post_type'=> 'what_on',
  ));
if( $the_query->have_posts()){
?>
<section class="section-what-on">
    <div class="container">
        <div class="what-on items-what-on">
            <?php 
            $i =0;
            while ($the_query->have_posts()){
                $i++;
                $the_query->the_post();
            ?>
            <div class="item-what-on">
                <div class="row row-gap--30 justify-content-between <?= $i%2==0?'flex-lg-row-reverse':''?>">
                    <div class="col-lg-4">
                        <div class="img-wrapper--cover thumbnail aspect-ratio--1-1">
                            <?= get_the_post_thumbnail() ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="content">
                            <div class="sub-title-al"><?= tr_posts_field('sub_title') ?></div>
                            <div class="title-al_smaller mt-10">
                                <?= get_the_title() ?>
                            </div>
                            <div class="description mt-30">
                                <?= wpautop(get_the_content()) ?>
                            </div>
                            <?php if(!empty(tr_posts_field('button'))){ ?>
                            <a href="<?= tr_posts_field('link') ?>" class="btn mt-50">
                               <?= tr_posts_field('button') ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class=" text-center pagination">
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
<?php }
get_footer();?>