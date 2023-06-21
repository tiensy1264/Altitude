<?php if(!empty($data['content'])){ ?>
<section class="section-contact">
    <?php $i=0; foreach($data['content'] as $item){ $i++; ?>
    <div class="item-contact">
        <div class="img-wrapper--cover image">
        <?= wp_get_attachment_image($item['image'], 'full') ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="<?= $i%2!=0?'offset-lg-7':'' ?> col-lg-5">
                    <div class="content">
                    <?php if(!empty($item['sub_title'])){ ?>
                        <div class="sub-title-al"><?= $item['sub_title'] ?></div>
                        <?php }if(!empty($item['title'])){ ?>
                        <div class="title-al_smaller mt-10"><?= $item['title'] ?></div>
                        <?php }if(!empty($item['description'])){ ?>
                        <div class="description mt-30">
                            <?= wpautop($item['description']) ?>
                        </div>
                        <?php }if(!empty($item['button'])){ ?>
                        <a href="<?= $item['link'] ?>" class="btn mt-50"><?= $item['button'] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
<?php } ?>