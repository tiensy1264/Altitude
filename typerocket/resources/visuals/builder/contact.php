<section class="section-contact-now">
    <div class="container">
        <div class="contact-now">
            <div class="row row-gap--30">
                <div class="col-lg-5">
                <?php if(!empty($data['sub_title'])){ ?>
                    <div class="sub-title-al"> <?= $data['sub_title'] ?></div>
                    <?php }if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller mt-10"><?= $data['title'] ?></div>
                    <?php } ?>
                </div>
                <div class="col-lg-7">
                <?php if(!empty($data['title_2'])){ ?>
                    <div class="fs-30 font--oswald color--primary"><?= $data['title_2'] ?></div>
                    <?php }if(!empty($data['description'])){ ?>
                        <div class="description mt-20">
                           <?= wpautop($data['description']) ?>
                        </div>
                        <?php }if(!empty($data['items'])){ ?>
                        <div class="d-flex flex-wrap gap-30 align-items-center mt-50">
                            <?php $i=0; foreach($data['items'] as $item){ $i++; ?>
                            <a href="<?= $item['link'] ?>" class="<?= $i == 1 ? 'btn' :'btn btn--blue btn-px-35' ?>"><?=$item['button']?></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>