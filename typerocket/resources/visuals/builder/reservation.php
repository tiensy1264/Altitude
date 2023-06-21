<section class="section-reservation">
    <div class="container">
        <div class="reservation">
            <div class="box-content text-center">
                <?php if(!empty($data['sub_title'])){?>
                <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                <?php }if(!empty($data['title'])){ ?>
                <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
                <?php } ?>
                <div class="row mt-50">
                    <div class="col-lg-4 offset-lg-1 col-sm-6">
                    <?php if(!empty($data['image'])){?>
                        <div class="img-wrapper--cover">
                        <?= wp_get_attachment_image($data['image'], 'large') ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-5 offset-lg-1 mt-sm-0 col-sm-6 mt-50">
                        <div class="content text-start">
                        <?php if(!empty($data['title_2'])){?>
                            <div class="fs-30 font--oswald color--primary"><?= $data['title_2'] ?></div>
                            <?php }if(!empty($data['description'])){?>
                            <div class="mt-20 description">
                               <?= wpautop($data['description']) ?>
                            </div>
                            <?php }if(!empty($data['image_2'])){?>
                            <div class="img-wrapper--contain mt-50 aspect-ratio--2-1">
                                <?= wp_get_attachment_image($data['image_2'], 'large') ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(!empty($data['background'])){ ?>
            <div class="bg-reservation" style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;"></div><?php } ?>
        </div>
    </div>
</section>