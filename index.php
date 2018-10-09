<?php
require __DIR__.'/vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

echo (new TesseractOCR('atlet.jpg'))
	->run();
?>
