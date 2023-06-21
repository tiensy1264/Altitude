<?php if(!empty($data['gallery'])){ ?>
<section class="section-slider">
    <div class="slider">
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                <?php foreach($data['gallery'] as $gallery) {?>
                <div class="swiper-slide">
                    <div class="img-wrapper--cover">
                    <?= wp_get_attachment_image($gallery, 'medium') ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php } ?>