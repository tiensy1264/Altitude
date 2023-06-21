<section class="section-banner">
			<div class="container-bigger">
				<div class="banner text-center"<?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;"<?php } ?>>
                <?php if(!empty($data['sub_title'])){ ?>
					<div class="sub-title-al color--white"><?= $data['sub_title'] ?></div>
                    <?php }if(!empty($data['title'])){ ?>
					<div class="title-al color--white"><?= $data['title'] ?></div>
                    <?php } ?>
				</div>
			</div>
		</section>