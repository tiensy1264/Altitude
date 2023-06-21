<section class="section-fancy-box"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="fancy-box">
            <div class="content text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
                        <a class="max-w-100 d-block mx-auto hover--scale" <?php if(!empty($data['file'])){ ?>href="<?= wp_get_attachment_url($data['file']) ?>"<?php }else{ ?>href="<?= $data['link'] ?>"<?php } ?> data-fancybox="gallery-a">
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/play_icon_wedding.png" />
                        </a>
                        <?php if(!empty($data['sub_title'])){ ?>
                        <div class="sub-title-al color--white mt-50">
                            <?= $data['sub_title'] ?>
                        </div>
                        <?php }if(!empty($data['title'])){ ?>
                        <div class="title-al_smaller color--white mt-10"><?= $data['title'] ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>