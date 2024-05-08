<?php

use MyNamespace\FileHandler;

require_once 'css.php';
require_once 'html.php';

FileHandler::saveCSSToFile($filePath, $generator->getCSSContent());
FileHandler::saveHTMLToFile($filePathHTML, $htmlGenerator->getHTMLContent());

header('Location: ../S2');
exit;

?>