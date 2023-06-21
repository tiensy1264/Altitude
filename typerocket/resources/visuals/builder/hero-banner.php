<?php if(!empty($data['banner'])){ ?>
<section class="section-hero-banner">
    <div class="container-bigger">
        <div class="slider">
            <div class="swiper-container overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach($data['banner'] as $item){ ?>
                    <div class="swiper-slide">
                        <div class="hero-banner text-center"<?php if(!empty($item['background'])){ ?> style="background: url(<?= wp_get_original_image_url($item['background'],'full')?>) no-repeat center;; background-size: cover;"<?php } ?>>
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
                                    <div class="content">
                                        <?php if(!empty($item['sub_title'])){ ?>
                                        <div class="fs-20 font--pt-san-caption color--white"><?= $item['sub_title'] ?></div>
                                        <?php }if(!empty($item['title'])){ ?>    
                                        <div class="title-al"><?= wpautop($item['title']) ?>
                                        </div>
                                        <?php }if(!empty($item['description'])){ ?>
                                        <div class="mt-10 color--white-80"><?= wpautop($item['description']) ?></div>
                                        <?php }if(!empty($item['button'])){ ?>    
                                        <a href="<?= $item['link'] ?>" class="btn btn--white mt-50"><?= $item['button'] ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>