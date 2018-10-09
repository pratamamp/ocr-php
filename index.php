<?php
require __DIR__.'/vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\FriendlyErrors;
use thiagoalessio\TesseractOCR\Command;
use thiagoalessio\TesseractOCR\Option;

echo (new TesseractOCR('text.png'))
	->run();
?>
