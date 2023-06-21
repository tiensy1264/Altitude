<section class="section-information" <?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <?php if((!empty($data['sub_title'])) || (!empty($data['title'])) || (!empty($data['description'])) || (!empty($data['gallery']))) {?>
    <div class="section-live-the-high">
        <div class="container overflow-hidden">
            <div class="live-the-high">
                <div class="row align-items-end">
                    <div class="col-lg-4">
                        <div class="content">
                            <?php if(!empty($data['sub_title'])){ ?>
                            <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                            <?php }if(!empty($data['title'])){ ?>
                            <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <?php if(!empty($data['description'])){ ?>
                        <div class="description">
                            <?= $data['description'] ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if(!empty($data['gallery'])){ ?>
                <div class="slider mt-140">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($data['gallery'] as $gallery){ ?>
                            <div class="swiper-slide">
                                <div class="img-wrapper--cover">
                                <?= wp_get_attachment_image($gallery, 'large') ?>
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
    <?php }if((!empty($data['sub_title_2'])) || (!empty($data['title_2'])) || (!empty($data['item']))) { ?>
    <div class="section-activities">
        <div class="container">
            <div class="activities">
                <div class="row">
                    <div class="col-lg-5">
                        <?php if(!empty($data['sub_title_2'])){ ?>
                        <div class="sub-title-al">
                            <?= $data['sub_title_2'] ?>
                        </div>
                        <?php }if(!empty($data['title_2'])){ ?>
                        <div class="title-al_smaller mt-10"><?= $data['title_2'] ?></div>
                        <?php } ?>
                    </div>
                </div>
                <?php if(!empty($data['items'])){ ?>
                <div class="box mt-50">
                    <div class="row row-gap--30">
                        <?php $i = 0;
                        foreach($data['items'] as $item){ 
                           $i++; ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item <?= $i%2==0 ? 'item-even' : 'item-odd' ?>">
                                <?php if(!empty($item['icon'])){ ?>
                                <div class="icon">
                                <?= wp_get_attachment_image($item['icon'], 'medium') ?>
                                </div>
                                <?php }if(!empty($item['title'])){ ?>
                                <div class="mt-30 font--oswald color--primary fs-26 fw-medium"><?= $item['title'] ?></div>
                                <?php }if(!empty($item['description'])){ ?>
                                <div class="mt-10">
                                    <?= wpautop($item['description']) ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>