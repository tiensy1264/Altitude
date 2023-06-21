<section class="section-services">
    <div class="container">
        <div class="services">
            <div class="row align-items-center row-gap--30 flex-lg-row flex-column-reverse">
                <div class="col-lg-6">
                    <div class="content">
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
                <div class="col-lg-6">
                <?php if(!empty($data['image'])){ ?>
                    <div class="img-wrapper--cover">
                        <?= wp_get_attachment_image($data['image'], 'large') ?>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <?php if(!empty($data['background'])){ ?>
    <div class="bg_services" style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;">
    </div>
    <?php } ?>
</section>