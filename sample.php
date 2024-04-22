<?php

// Creating a file
$filename = "styles.css";
$file = fopen($filename, "w"); // Open file for writing
if ($file) {
   
    $cssContent = "
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #521;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Add more CSS rules as needed */
    ";
    
    // Writing CSS content to the file
    fwrite($file, $cssContent);
    fclose($file); 
    echo "File created successfully.";
} else {
    echo "Unable to create file.";
}


///test the integrity of the file
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
