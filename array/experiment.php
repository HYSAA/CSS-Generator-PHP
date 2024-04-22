<?php
// Array to hold CSS content
$cssContentArray = array(
    'body' => array(
        'font-family' => 'Arial, sans-serif',
        'background-color' => '#f0f0f0',
        'color' => '#521'
    ),
    '.container' => array(
        'max-width' => '960px',
        'margin' => '0 auto',
        'padding' => '20px',
        'background-color' => '#fff',
        'box-shadow' => '0 0 10px rgba(0, 0, 0, 0.1)'
    )
    // Add more CSS rules as needed
);

// Function to convert CSS array to string
function generateCSSFromArray($cssArray) {
    $cssString = '';
    foreach ($cssArray as $selector => $rules) {
        $cssString .= "$selector {\n";
        foreach ($rules as $property => $value) {
            $cssString .= "    $property: $value;\n";
        }
        $cssString .= "}\n";
    }
    return $cssString;
}

// Generate CSS string from array
$cssContent = generateCSSFromArray($cssContentArray);

// Write CSS content to a file
$cssFileName = 'styles.css'; // Name of the CSS file
$cssFile = fopen($cssFileName, 'w'); // Open file for writing
if ($cssFile) {
    fwrite($cssFile, $cssContent); // Write CSS content to the file
    fclose($cssFile); // Close the file
    echo "CSS file '$cssFileName' generated successfully.";
} else {
    echo "Error: Unable to open CSS file for writing.";
}

// Test the integrity of the array
echo "<br>Array content: <pre>" . htmlspecialchars(print_r($cssContentArray, true)) . "</pre>";

// Append content to the array
$cssContentArray['.new-class'] = array(
    'color' => 'red',
    'font-size' => '20px'
);

// Test the integrity of the updated array
echo "<br>Updated array content: <pre>" . htmlspecialchars(print_r($cssContentArray, true)) . "</pre>";
?>
