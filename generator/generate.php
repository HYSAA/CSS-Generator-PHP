<?php

// Creating a file
$filename = "styles.css";
$file = fopen($filename, "w"); // Open file for writing

if ($file) {
   
    // Define CSS rules organized by HTML tags
    $cssContent = array(
        'body' => [],
        'header' => []
        // Add more HTML tags and associated CSS rules here
    );
    
    // Function to add CSS rules for a specific HTML tag
    function addCssRule(&$cssContent, $tag, $rule) {
        $cssContent[$tag][] = $rule;
    }
    
    // Method chaining to build CSS input
    addCssRule($cssContent, 'body', "body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }");

    addCssRule($cssContent, 'header', "header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 80px 0;
    }");

    addCssRule($cssContent, 'header', "h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }");

    addCssRule($cssContent, 'content', ".content {
        padding: 40px;
    }");

    addCssRule($cssContent, 'footer', "footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }");

    // Responsive styles
    addCssRule($cssContent, 'media', "@media (max-width: 768px) {
        h1 {
            font-size: 28px;
        }
    }");
    
    // Write CSS content to the file
    foreach ($cssContent as $htmlTag => $rules) {
        fwrite($file, implode("\n", $rules) . "\n");
    }
    
    fclose($file); 
    echo "File created successfully.";
} else {
    echo "Unable to create file.";
}

// Test the integrity of the file
// Reading from a file
$file = fopen($filename, "r"); // Open file for reading
if ($file) {
    $content = fread($file, filesize($filename));
    fclose($file); // Close the file
    echo "File content: <br>" . nl2br($content); // nl2br() to preserve line breaks in HTML output
} else {
    echo "Unable to open file for reading.";
}

// Appending to a file
$file = fopen($filename, "a"); // Open file for appending
if ($file) {
    fwrite($file, "\n/* This is appended content. */");
    fclose($file); // Close the file
    echo "<br>Content appended successfully.";
} else {
    echo "<br>Unable to open file for appending.";
}
?>
