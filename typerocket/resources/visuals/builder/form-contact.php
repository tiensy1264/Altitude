<section class="section-form-contact" <?php if(!empty($data['background'])){ ?> style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center;; background-size: cover;" <?php } ?>>
			<div class="container">
				<div class="content">
					<div class="top text-center">
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
                            <?php if(!empty($data['sub_title'])){ ?>
								<div class="sub-title-al"> <?= $data['sub_title'] ?></div>
                                <?php }if(!empty($data['title'])){ ?>
								<div class="title-al_smaller mt-10"> <?= $data['title'] ?></div>
                                <?php }if(!empty($data['description'])){ ?>
								<div class="description mt-30"><?= wpautop($data['description']) ?></div>
                                <?php } ?>
							</div>
						</div>
					</div>
					<div class=" mt-50">
                        <?= do_shortcode($data['form_contact']) ?>
					</div>

				</div>
			</div>
		</section>