<section class="section-our-services">
    <div class="container">
        <div class="our-services">
            <div class="row row-gap--30">
                <div class="col-lg-4">
                    <div class="content my-lg-60">
                    <?php if(!empty($data['sub_title'])){ ?>
                        <div class="sub-title-al">
                            <?= $data['sub_title'] ?>
                        </div>
                        <?php }if(!empty($data['title'])){ ?>
                        <div class="title-al_smaller mt-10">
                            <?= $data['title'] ?>
                        </div>
                        <?php }if(!empty($data['items'])){ ?>
                        <div class="box-services mt-30 d-flex flex-wrap flex-column gap-30">
                        <?php foreach($data['items'] as $item){ ?>
                            <div class="item">
                                <div class="fw-bold"><?= $item['title'] ?></div>
                                <div class="mt-10">
                                <?= wpautop($item['description']) ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <?php if(!empty($data['gallery'])){ ?>
                    <div class="slider">
                        <div class="swiper-container overflow-hidden">
                            <div class="swiper-wrapper ">
                                <?php foreach($data['gallery'] as $gallery){ ?>
                                <div class="swiper-slide">
                                    <div class="img-wrapper--cover">
                                    <?= wp_get_attachment_image($gallery, 'medium') ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($data['background'])){ ?>
    <div class="bg_our-services" style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;">
    </div>
    <?php } ?>
</section>