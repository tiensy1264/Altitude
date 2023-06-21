<section class="section-wedding">
    <div class="container">
        <div class="wedding">
            <div class="img-wrapper--cover thumbnail mt-lg-120 mt-50">
                <?= wp_get_attachment_image($data['thumbnail'], 'full') ?>
                <a class="fancy max-w-sm-100 max-w-70 hover--scale"<?php if(!empty($data['file'])){ ?>href="<?= wp_get_attachment_url($data['file']) ?>"<?php }else{ ?>href="<?= $data['link'] ?>"<?php } ?> data-fancybox="gallery-a">
                    <img src="<?= get_template_directory_uri(  ) ?>/assets/icons/play_icon_wedding.png" />
                </a>
            </div>
            <?php if(!empty($data['description'])){ ?>
            <div class="description mt-30">
                <?= wpautop($data['description']) ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>