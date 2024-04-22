<?php

// Creating a file
$filename = "styles.css";
$file = fopen($filename, "w"); // Open file for writing
if ($file) {
   
    $cssContent = "
    *{padding: 0; margin: 0; box-sizing: border-box;}
    body{height: 900px;}
    header {
        background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
        text-align: center;
        width: 100%;
        height: auto;
        background-size: cover;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 85% 85% / 30%;
    }
    header .overlay{
        width: 100%;
        height: 100%;
        padding: 50px;
        color: #FFF;
        text-shadow: 1px 1px 1px #333;
      background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
        
    }
    
    h1 {
        font-family: 'Dancing Script', cursive;
        font-size: 80px;
        margin-bottom: 30px;
    }
    
    h3, p {
        font-family: 'Open Sans', sans-serif;
        margin-bottom: 30px;
    }
    
    button {
        border: none;
        outline: none;
        padding: 10px 20px;
        border-radius: 50px;
        color: #444;
        background: #fff;
        margin-bottom: 50px;
        box-shadow: 0 3px 20px 0 #0000003b;
    }
    button:hover{
        cursor: pointer;
    }
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
