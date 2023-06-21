<?php get_header() ?>
<div class="section section-static-page">
    <div class="container">
        <div class="static-page">
            <div class="row">
                <div class="col-sm-12">
                    <div class="static-page-title">
                        <div class="fz-50 text-capitalize">
                            <?php the_title() ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="static-page-content mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>