<section class="section-contact-event"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-5 col-sm-10 offset-sm-1 ">
                <div class="contact-event">
                <?php if(!empty($data['sub_title'])){ ?>
                    <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                    <?php }if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
                    <?php }if(!empty($data['text'])){ ?>
                    <div class="fs-30 font--oswald mt-30 color--primary"><?= $data['text'] ?></div>
                    <?php }if(!empty($data['description'])){ ?>
                    <div class="description mt-30">
                        <?= wpautop($data['description']) ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>