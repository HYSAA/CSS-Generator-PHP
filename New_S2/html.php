<?php

namespace MyNamespace;
require_once 'autoloader.php';

$filePathHTML = "sample.html";
FileHandler::createFileHTML($filePathHTML);

$htmlGenerator = new HTMLGenerator();
$htmlGenerator->addTag('head')->addLinkTag('style.css', ['rel' => 'stylesheet'])->addCloseTag('head')
    ->addTag('body')
    ->addTag('div')->addImgTag('images/image.jpg', ['alt' => 'Description of the image'])->addCloseTag('div')
    ->addTag('div')->addTag('p')->addContent('The quick brown fox')->addCloseTag('p')->addCloseTag('div')
    ->addTag('div', ['class' => 'container'])->addContent('over the lazy dog')->addCloseTag('div')
    ->addCloseTag('body');
    
// echo $htmlGenerator->getHTMLContent();
// FileHandler::saveHTMLToFile($filePath, $htmlGenerator->getHTMLContent());