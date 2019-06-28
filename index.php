<?php
	include('vendor/autoload.php');
	use Fille\Quatre4;
	use Michelf\Markdown;

	$quatre4 = new Quatre4();
	$quatre4->setCouleur("gris");
	echo Markdown::defaultTransform($quatre4->getCouleur() . '*gras* **italic**');