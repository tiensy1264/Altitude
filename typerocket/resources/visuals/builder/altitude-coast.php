<section class="section-coast"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="coast text-center">
                <?php if(!empty($data['sub_title'])){ ?>
                    <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                    <?php }if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller mt-10">
                    <?= $data['title'] ?>
                    </div>
                    <?php }if(!empty($data['description'])){ ?>
                    <div class="description mt-50">
                       <?= wpautop($data['description']) ?>
                    </div>
                    <?php }if(!empty($data['items'])){ ?>
                    <div class="d-flex flex-wrap gap-30 justify-content-center mt-50">
                        <?php $i=0; foreach($data['items'] as $btn){ $i++;?>
                        <a class="<?= $i==1?'btn':'btn btn--blue' ?>" href="<?= $btn['link'] ?>">
                        <?= $btn['button'] ?>
                        </a>
                    <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>