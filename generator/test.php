<?php

require_once 'vendor/autoload.php'; // Include the Composer autoloader

use CssBuilder\CssBuilder;

// Create an instance of CssBuilder
$builder = new CssBuilder();

// Method chaining to build CSS input
$builder->addCssRule('body', "body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }")
    ->addCssRule('header', "header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 80px 0;
    }")
    ->addCssRule('header', "h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }")
    ->addCssRule('content', ".content {
        padding: 40px;
    }")
    ->addCssRule('footer', "footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }")
    ->addCssRule('media', "@media (max-width: 768px) {
        h1 {
            font-size: 28px;
        }
    }")
    ->buildCssFile("styles.css");

?>
