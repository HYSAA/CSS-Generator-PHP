<?php

// Function to generate CSS content
function generateCSS($imageURL, $videoURL) {
    $cssContent = "
    .image-box {
        border: 2px solid #ccc;
        padding: 10px;
        max-width: 400px;
        margin: 0 auto;
        background: url('$imageURL') center center no-repeat;
        background-size: cover;
    }
    ";

    return $cssContent;
}

// Creating a file
$filename = "styles.css";
$file = fopen($filename, "w"); // Open file for writing
if ($file) {
    $imageURL = "https://th.bing.com/th/id/OIP.1XXE46JQynPUC6-N2dVC6gHaNK?rs=1&pid=ImgDetMain"; // URL for the image
    $videoURL = "https://example.com/video.mp4"; // URL for the video
    $cssContent = generateCSS($imageURL, $videoURL);

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
    echo "<br><br>File content: <br>" . nl2br($content); // nl2br() to preserve line breaks in HTML output
} else {
    echo "<br><br>Unable to open file for reading.";
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
