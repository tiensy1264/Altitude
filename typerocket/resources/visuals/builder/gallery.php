<section class="section-gallery"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
			<div class="container">
				<div class="gallery text-center">
                    <?php if(!empty($data['sub_title'])){ ?>
					<div class="sub-title-al">
						<?= $data['sub_title'] ?>
					</div>
                    <?php }if(!empty($data['title'])){ ?>
					<div class="title-al_smaller mt-10">
                        <?= $data['title'] ?>
					</div>
                    <?php } ?>
				</div>
			</div>
            <?php if(!empty($data['gallery'])){ ?> 
			<div class="slider mt-50">
				<div class="swiper-container overflow-hidden">
					<div class="swiper-wrapper align-items-center">
                        <?php foreach($data['gallery'] as $gallery){ ?>
						<div class="swiper-slide">
							<div class="item-gallery d-flex flex-column gap-30 justify-content-center">
                                <?php foreach($gallery['images'] as $img){ ?>
								<div class="img-wrapper--cover">
                                <?= wp_get_attachment_image($img['image'], 'large') ?>
								</div>
                                <?php } ?>
							</div>
						</div>
                        <?php } ?>
					</div>
				</div>
			</div>
            <?php } ?>
		</section>