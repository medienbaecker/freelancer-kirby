<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">
		<!-- Masthead Avatar Image-->
			<?php if($site->hasFiles()): ?>
				<img class="masthead-avatar mb-5" src="<?= $site->files()->first()->url() ?>" alt="<?= $site->title() ?>" />
			<?php endif ?>
		
		<!-- Masthead Heading-->
		<h1 class="masthead-heading text-uppercase mb-0"><?= $site->heading()->or($site->title()) ?></h1>
		<!-- Icon Divider-->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Masthead Subheading-->
		<p class="masthead-subheading font-weight-light mb-0"><?= $site->subheading() ?></p>
	</div>
</header>