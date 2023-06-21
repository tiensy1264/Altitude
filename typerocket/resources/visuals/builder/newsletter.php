<section class="section-subscriber" <?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-10 offset-sm-1">
                <div class="subscriber text-center">
                    <?php if(!empty($data['sub_title'])){ ?>
                    <div class="sub-title-al">
                        <?= $data['sub_title'] ?>
                    </div>
                    <?php }if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller mt-10">
                        <?= $data['title'] ?>
                    </div>
                    <?php }if(!empty($data['description'])){ ?>
                    <div class="mt-10"><?= wpautop($data['description']) ?></div>
                    <?php }if(!empty($data['shortcode'])){ ?>
                    <div class="form-subscriber mt-50">
                            <?= do_shortcode($data['shortcode']) ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>