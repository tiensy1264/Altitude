<section class="section-highlight"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
    <div class="container">
        <div class="highlight">
            <div class="top">
                <?php if(!empty($data['sub_title'])){ ?>
                <div class="sub-title-al"><?= $data['sub_title'] ?></div>
                <?php } ?>
                <div class="d-sm-flex align-items-center justify-content-between gap-20 mt-10">
                    <?php if(!empty($data['title'])){ ?>
                    <div class="title-al_smaller"><?= $data['title'] ?></div>
                    <?php }if(!empty($data['button'])){ ?>
                    <a class="btn mt-sm-0 mt-20" href="<?= $data['link'] ?>">
                       <?= $data['button'] ?>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <?php if(!empty($data['search_blogs'])){ ?>
            <div class="slider mt-50">
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php foreach($data['search_blogs'] as $post){ ?>
                        <div class="swiper-slide">
                            <div class="item-post">
                                <div class="img-wrapper--cover aspect-ratio--4-3 hover--scale overflow-hidden">
                                    <?= get_the_post_thumbnail($post) ?>
                                </div>
                                <div class="content mt-30">
                                    <div class="fs-26 font--oswald fw-medium color--primary line-limit--1">
                                          <?= get_the_title($post) ?>
                                    </div>
                                    <div class="fs-26 font--oswald fw-medium color--primary line-limit--1">
                                    <?= tr_posts_field('time_title',$post)?>
                                    </div>
                                    <div class="line-limit--4 mt-15"><?= get_post_field('post_content', $post); ?></div>
                                    <a class="btn-arrow mt-30" target="_blank" href="<?= tr_posts_field('link',$post) ?>">View Menu</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>