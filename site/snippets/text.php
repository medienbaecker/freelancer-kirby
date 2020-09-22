<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
	<div class="container">
		<!-- About Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-white"><?= $page->title() ?></h2>
		<!-- Icon Divider-->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- About Section Content-->
		<div class="row">
			<div class="col-lg-4 ml-auto"><?= $page->text_left()->kt() ?></div>
			<div class="col-lg-4 mr-auto"><?= $page->text_right()->kt() ?></div>
		</div>
		<?php if($page->button_url()->isNotEmpty()): ?>
		<!-- About Section Button-->
		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="<?= $page->button_url() ?>">
				<i class="fas fa-download mr-2"></i>
				<?= $page->button_label() ?>
			</a>
		</div>
		<?php endif ?>
	</div>
</section>