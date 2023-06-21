<section class="section-event-rooftop" <?php if(!empty($item['background'])){ ?> style="background: url(<?= wp_get_original_image_url($item['background'],'full')?>) no-repeat center;; background-size: cover;"<?php } ?>>
    <div class="container">
        <div class="event">
            <div class="row">
                <div class="col-lg-5">
                    <?php if(!empty($data['image'])){ ?>
                    <div class="img-wrapper--cover img-event aspect-ratio--3-4 aspect-ratio-lg-unset h">
                        <?= wp_get_attachment_image($data['image'], 'full') ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-5 offset-lg-1 mt-lg-0 mt-50">
                    <div class="content d-flex flex-column justify-content-center">
                    <?php if(!empty($data['sub_title'])){ ?>
                        <div class="sub-title-al">
                            <?= $data['sub_title'] ?>
                        </div>
                        <?php }if(!empty($data['title'])){ ?>
                        <div class="title-al_smaller mt-10">
                        <?= $data['title'] ?>
                        </div>
                        <?php }if(!empty($data['description'])){ ?>
                        <div class="mt-30">
                            <?= wpautop($data['description']) ?>
                        </div>
                        <?php }if(!empty($data['buttons'])){ ?>
                        <div class="d-flex flex-wrap gap-30 align-items-center  mt-50">
                            <?php $i = 0;
                            foreach($data['buttons'] as $btn){ $i++; ?>
                            <a href="<?= $btn['link'] ?>" class="btn <?= $i%2!==0?'btn--blue':'' ?>" >
                              <?= $btn['button'] ?>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>