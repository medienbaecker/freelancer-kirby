<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('hero') ?>
		
	<?php foreach($pages->listed() as $p): ?>
		<?php snippet($p->intendedTemplate(), ['page' => $p]) ?>
	<?php endforeach ?>
		
<?php snippet('footer') ?>
<?php snippet('bottom') ?>