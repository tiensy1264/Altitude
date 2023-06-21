<?php
get_header();
if (have_posts()) { ?>
    <section class="section-blogs pt-50 pb-100 bg--cream">
        <div class="container">
            <div class="font--title fs--130  lh--primary mb-50 text-center">
                <?php echo get_the_title(get_option('page_for_posts', true)) ?>
            </div>

            <div class="blogs">
                <div class="row row-cols-sm-2 row-cols-1 g-30">
                    <?php while (have_posts()) {
                        the_post(); ?>
                        <div class="col">
                            <div class="blog border--primary">
                                <div class="blog__thumbnail aspect-ratio--3-2">
                                    <div class="blog__thumbnail--first img-wrapper--cover">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                    <a href="<?php the_permalink();?>" class="btn btn--ellipse">
                                        <span>Read it!</span>
                                    </a>
                                </div>
                                <div class="blog__content border-top--primary">
                                    <div class="blog__title px-30 py-20">
                                        <div class="blog__title-text fs--30 fw-medium line-limit--2">
                                            <?php the_title()?>
                                        </div>
                                    </div>
                                    <div class="blog__excerpt px-30 py-20">
                                        <div class="blog__excerpt-text fs--30 fw-medium line-limit--2">
                                            <?php the_excerpt();?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php pagination_tdc();?>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata();
get_footer();
