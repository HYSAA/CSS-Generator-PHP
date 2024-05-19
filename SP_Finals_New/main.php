<?php

require_once 'FileHandler.php';
require_once 'css.php';
require_once 'html.php';

FileHandler::saveCSSToFile($filePath, $generator->getCSSContent());
FileHandler::saveHTMLToFile($filePathHTML, $htmlGenerator->getHTMLContent());

FileHandler::saveCSSToFile($filePath1, $generator1->getCSSContent());
FileHandler::saveCSSToFile($filePath2, $generator2->getCSSContent());
FileHandler::saveCSSToFile($filePath3, $generator3->getCSSContent());

header('Location: ../SP_Finals/index.html');
exit;

?>
