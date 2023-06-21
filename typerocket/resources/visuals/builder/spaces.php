<section class="section-space"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
<?php if(!empty($data['image'])){ ?>
    <div class="img-wrapper--cover image">
        <?= wp_get_attachment_image($data['image'], 'full') ?>
    </div>
    <?php } ?>
    <div class="container">
        <div class="space">
            <div class="row">
                <div class="col-lg-5 offset-lg-7 col-sm-10 offset-sm-1">
                <?php if(!empty($data['sub_title'])){ ?>
                    <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                    <?php }if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
                    <?php }if(!empty($data['description'])){ ?>
                    <div class="description mt-30"><?= wpautop($data['description']) ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>