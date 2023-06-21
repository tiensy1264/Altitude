<section class="section-event"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="event">
            <div class="row">
                <div class="col-lg-5">
                    <?php if(!empty($data['image'])){ ?>
                    <div class="img-wrapper--cover img-event aspect-ratio--3-4 aspect-ratio-lg-unset h">
                    <?= wp_get_attachment_image($data['image'], 'large') ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-6 offset-lg-1 mt-lg-0 mt-50">
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
                        <div class="mt-20">
                            <?= wpautop($data['description']) ?>
                        </div>
                        <?php }if(!empty($data['count_up'])){ ?>
                        <div class="count-up d-flex flex-wrap gap-30 mt-50">
                            <?php foreach($data['count_up'] as $item){ ?>
                            <div class="item-count text-center px-20">
                                <?php if((!empty($item['number'])) || (!empty($item['special_characters']))){ ?>
                                <div class="title-al_smaller"><span class="counter"><?= $item['number'] ?></span><span><?= $item['special_characters'] ?></span>
                                </div>
                                <?php }if(!empty($item['description'])){ ?>
                                <div class="fs-24 mt-10"><?= wpautop($item['description']) ?></div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }if(!empty($data['button'])){ ?>
                        <a class="btn mt-50" href="<?= $data['link'] ?>">
                            <?= $data['button'] ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>