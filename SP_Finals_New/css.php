<?php

require_once 'FileHandler.php';
require_once 'CSSGenerator.php'; 

$filePath = "../SP_Finals/css/style.css";
FileHandler::createFile($filePath1);
$generator = new MyNamespace\CSSGenerator();
$generator
    ->addSelector("*", null, null)
    ->addProperty("margin", "0px")
    ->addProperty("padding", "0px")
    ->addCloseSelector()

    ->addSelector("body", null, null)
    ->addProperty("margin-top", "20px")
    ->addProperty("background-color", "#ccc")
    ->addProperty("font-family", "arial, verdana, tahoma, sans-serif")
    ->addCloseSelector();

$filePath1 = "../SP_Finals/css/header.css";
FileHandler::createFile($filePath1);
$generator1 = new MyNamespace\CSSGenerator();
$generator1
    ->addSelector("#header", null, null)
    ->addProperty("margin", "0 auto")
    ->addProperty("width", "1000px")
    ->addProperty("min-height", "200px")
    ->addCloseSelector()

    ->addSelector("section", null, null)
    ->addProperty("display", "block")
    ->addProperty("unicode-bidi", "isolate")
    ->addCloseSelector()

    ->addSelector("#mainmenu, .sub1", null, null)
    ->addProperty("list-style", "none")
    ->addCloseSelector()

    ->addSelector("#mainmenu li", null, null)
    ->addProperty("width", "125px")
    ->addProperty("position", "relative")
    ->addProperty("float", "left")
    ->addProperty("margin-right", "4px")
    ->addProperty("text-align", "center")
    ->addCloseSelector()

    ->addSelector("#mainmenu a", null, null)
    ->addProperty("font-weight", "bold")
    ->addProperty("background-color", "#fff")
    ->addProperty("color", "#000")
    ->addProperty("text-decoration", "none")
    ->addProperty("display", "block")
    ->addProperty("width", "125px")
    ->addProperty("height", "35px")
    ->addProperty("line-height", "35px")
    ->addCloseSelector()

    ->addSelector("#mainmenu .sub1 a", null, null)
    ->addProperty("font-size", "12px")
    ->addCloseSelector()

    ->addSelector("#mainmenu li:hover > a", null, null)
    ->addProperty("background-color", "#237291")
    ->addProperty("color", "#fff")
    ->addCloseSelector()

    ->addSelector("#mainmenu li:hover a:hover", null, null)
    ->addProperty("background-color", "aqua")
    ->addProperty("color", "#000")
    ->addCloseSelector()

    ->addSelector("#mainmenu .sub1", null, null)
    ->addProperty("display", "none")
    ->addProperty("position", "absolute")
    ->addCloseSelector()

    ->addSelector("#mainmenu li:hover .sub1", null, null)
    ->addProperty("display", "block")
    ->addCloseSelector()

    ->addSelector("#lefthead", null, null)
    ->addProperty("height", "200px")
    ->addProperty("width", "200px")
    ->addProperty("background", "#fff url('../images/libretto2_200px.png') no-repeat")
    ->addProperty("border-top-left-radius", "25px")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("#righthead", null, null)
    ->addProperty("height", "200px")
    ->addProperty("width", "800px")
    ->addProperty("background", "#fff url('../images/libretto_banner.png') no-repeat")
    ->addProperty("border-top-right-radius", "25px")
    ->addProperty("float", "left")
    ->addCloseSelector()
    
    ->addSelector("#mainmenubar", null, null)
    ->addProperty("margin", "0 auto")
    ->addProperty("width", "1000px")
    ->addProperty("height", "35px")
    ->addProperty("background-color", "#fff")
    ->addProperty("border-bottom", "3px solid black")
    ->addCloseSelector();

// Second CSS file
$filePath2 = "../SP_Finals/css/body.css";
FileHandler::createFile($filePath2);
$generator2 = new MyNamespace\CSSGenerator();
$generator2
    ->addSelector("#maincontainer", null, null)
    ->addProperty("overflow", "hidden")
    ->addProperty("margin", "0 auto")
    ->addProperty("width", "1000px")
    ->addProperty("height", "auto")
    ->addProperty("background-color", "#fff")
    ->addProperty("border-bottom", "1px solid black")
    ->addCloseSelector()

    ->addSelector("#headline", null, null)
    ->addProperty("width", "1000px")
    ->addProperty("height", "350px")
    ->addCloseSelector()

    ->addSelector("#headlleft img", null, null)
    ->addProperty("display", "block")
    ->addProperty("padding-top", "40px")
    ->addProperty("margin", "0 auto")
    ->addCloseSelector()
    
    ->addSelector("#headlleft", null, null)
    ->addProperty("width", "600px")
    ->addProperty("float", "left")
    ->addCloseSelector()
    
    ->addSelector("#headlright", null, null)
    ->addProperty("width", "400px")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("#left", null, null)
    ->addProperty("width", "300px")
    ->addProperty("min-height", "200px")
    ->addProperty("height", "auto")
    ->addProperty("background-color", "#fff")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("#right", null, null)
    ->addProperty("width", "700px")
    ->addProperty("height", "auto")
    ->addProperty("background-color", "#fff")
    ->addProperty("float", "left")
    ->addCloseSelector()

    ->addSelector("#right .blockheadings", null, null)
    ->addProperty("display", "block")
    ->addProperty("font-family", "arial narrow, arial, sans-serif")
    ->addProperty("font-size", "30px")
    ->addProperty("color", "#fff")
    ->addProperty("padding-left", "10px")
    ->addProperty("background-color", "#65A9D6")
    ->addCloseSelector()

    ->addSelector("#right #placeholder", null, null)
    ->addProperty("margin", "0 auto")
    ->addProperty("height", "auto")
    ->addProperty("padding-top", "30px")
    ->addProperty("width", "600px")
    ->addCloseSelector()

    ->addSelector("#right .sections", null, null)
    ->addProperty("padding", "2px")
    ->addProperty("float", "left")
    ->addProperty("margin-right", "50px")
    ->addProperty("margin-bottom", "50px")
    ->addProperty("width", "220px")
    ->addProperty("min-height", "50px")
    ->addProperty("border-top-left-radius", "10px")
    ->addProperty("border-top-right-radius", "10px")
    ->addProperty("border", "1px solid #ccc")
    ->addProperty("font-size", "12px")
    ->addCloseSelector()

    ->addSelector("#right .sections p", null, null)
    ->addProperty("border-top-left-radius", "10px")
    ->addProperty("border-top-right-radius", "10px")
    ->addProperty("background-color", "#65A9D6")
    ->addProperty("font-family", "arial narrow, arial, sans-serif")
    ->addProperty("font-size", "30px")
    ->addProperty("color", "#fff")
    ->addProperty("padding-left", "5px")
    ->addProperty("height", "40px")
    ->addCloseSelector()

    ->addSelector("#right .sectiontext", null, null)
    ->addProperty("text-align", "justify")
    ->addCloseSelector()

    ->addSelector("#headlright .headlineimpact", null, null)
    ->addProperty("display", "block")
    ->addProperty("font-family", "tahoma, sans-serif")
    ->addProperty("font-size", "45px")
    ->addProperty("font-weight", "normal")
    ->addProperty("color", "#00f")
    ->addProperty("text-align", "center")
    ->addCloseSelector()

    ->addSelector("#headlright .headlinetext", null, null)
    ->addProperty("display", "block")
    ->addProperty("font-family", "tahoma, sans-serif")
    ->addProperty("font-size", "30px")
    ->addProperty("font-weight", "normal")
    ->addProperty("color", "#f00")
    ->addProperty("text-align", "center")
    ->addCloseSelector();

$filePath3 = "../SP_Finals/css/footer.css";
FileHandler::createFile($filePath3);
$generator3 = new MyNamespace\CSSGenerator();
$generator3
    ->addSelector("#footer", null, null)
    ->addProperty("margin", "0 auto")
    ->addProperty("width", "1000px")
    ->addProperty("min-height", "200px")
    ->addProperty("background-color", "#000")
    ->addProperty("border-bottom-left-radius", "25px")
    ->addProperty("border-bottom-right-radius", "25px")
    ->addProperty("position", "relative")
    ->addCloseSelector()

    ->addSelector("#footer #copyrighttext", null, null)
    ->addProperty("display", "block")
    ->addProperty("text-align", "right")
    ->addProperty("font-size", "13px")
    ->addProperty("color", "#fff")
    ->addProperty("position", "absolute")
    ->addProperty("bottom", "20px")
    ->addProperty("right", "10px")
    ->addCloseSelector();

?>