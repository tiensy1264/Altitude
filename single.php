<?php
get_header();
?>
    <section class="section-blog-details py-100 bg--cream">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="blog__heading pb-30 border-bottom--primary">
                        <div class="blog__title font--title fs--70 text-center">
                            <?php the_title(); ?>
                        </div>
                        <div class="blog__meta d-flex align-items-center justify-content-center mt-30">
                            <div class="blog__date px-20 color--primary-80">
                                <?php echo get_the_date() ?>
                            </div>
                            
                        </div>
                    </div>
                        <div class="blog__content default-style color--primary-80 pt-50">
                            <?php the_content(); ?>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
