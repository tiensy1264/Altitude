</main>


<footer class="footer overflow-hidden" <?php if (!empty(tr_options_field('theme_options.background'))) { ?> style="background: url(<?= wp_get_original_image_url(tr_options_field('theme_options.background'), 'full') ?>) no-repeat center;; background-size: cover;">
<?php } ?>
<div class="container">
	<div class="content-footer">
		<div class="row">
			<div class="col-lg-4">
				<?php if (!empty(tr_options_field('theme_options.logo_footer'))) { ?>
					<div class="logo max-w-230">
						<a href="<?php echo get_site_url() ?>">
							<?= wp_get_attachment_image(tr_options_field('theme_options.logo_footer'), 'full') ?>
						</a>
					</div>
				<?php }
				if (!empty(tr_options_field('theme_options.contact'))) { ?>
					<div class="contacts mt-40">
						<ul class="d-flex flex-column gap-30">
							<?php foreach (tr_options_field('theme_options.contact') as $item) { ?>
								<li class="contact d-flex gap-35">
									<div class="max-w-30 ">
										<?= wp_get_attachment_image($item['icon'], 'medium') ?>
									</div>
									<div class="description fs-20 color--white">
										<?= wpautop($item['content']) ?>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
			</div>
			<div class="col-lg-2 offset-lg-1 col-6">
				<div class="quick-links mt-65">
					<div class="fs-30 font--oswald color--white">QUICK LINK</div>
					<?php $bottomMenuItems = get_menu_items_by_slug('footer-menu');
					if (!empty($bottomMenuItems)) { ?>
						<ul class="d-flex flex-column gap-20 mt-40">
							<?php foreach ($bottomMenuItems as $menu) { ?>
								<li class="fs-20 color--white"><a href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-4 offset-lg-1 col-6">
				<div class="box-information mt-65">
					<div class="openning">
						<div class="fs-30 font--oswald color--white">OPENING HOURS</div>
						<?php if (!empty(tr_options_field('theme_options.opening'))) { ?>
							<ul class="d-flex flex-column gap-20 mt-40">
								<li class="fs-20 color--white"><?= wpautop(tr_options_field('theme_options.opening')) ?></li>
							</ul>
						<?php } ?>
					</div>
					<div class="socials mt-50">
						<div class="fs-30 font--oswald color--white">FOLLOW US</div>
						<?php if (!empty(tr_options_field('theme_options.social'))) { ?>
							<div class="d-flex gap-20 align-items-center flex-wrap mt-30">
								<?php foreach (tr_options_field('theme_options.social') as $social) { ?>
									<div class="max-w-30 img-wrapper--contain aspect-ratio--1-1">
										<a href="<?= $social['link'] ?>">
											<?= wp_get_attachment_image($social['icon'], 'medium') ?>
										</a>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php if (!empty(tr_options_field('theme_options.copyright'))){ ?>
<div class="copyright">
	<div class="container">
		<div class="color--white content-copyright"><?= wpautop(tr_options_field('theme_options.copyright')) ?></div>
	</div>
</div>
<?php } ?>
</footer>
<!-- Script -->
<?php wp_cookies_popup(); ?>
<?php wp_footer(); ?>

</body>

</html>