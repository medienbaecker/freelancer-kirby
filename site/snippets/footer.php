<!-- Footer-->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4"><?= $site->footer_col1_header() ?></h4>
				<?= $site->footer_col1_text()->kt() ?>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4"><?= $site->footer_col2_header() ?></h4>
				<?php foreach($site->footer_col2_links()->toStructure() as $link): ?>
					<a class="btn btn-outline-light btn-social mx-1" href="<?= $link->url() ?>"><i class="fab fa-fw <?= $link->icon() ?>"></i></a>
				<?php endforeach ?>
			</div>
			<!-- Footer About Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4"><?= $site->footer_col3_header() ?></h4>
				<?= $site->footer_col3_text()->kt() ?>
			</div>
		</div>
	</div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
	<div class="container"><small>Copyright © Your Website 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>