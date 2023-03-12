<?php

$file_name = "ostad.txt";
$file = fopen($file_name, "r+");

if ($file === false) {
  // Create the file if it doesn't exist
  $file = fopen($file_name, "w");
}

// Read the contents of the file
$contents = fread($file, filesize($file_name));

// Append the current date and time to the contents
$contents .= "\n" . date("Y-m-d H:i:s");

// Move the file pointer to the beginning of the file
fseek($file, 0);

// Write the updated contents back to the file
fwrite($file, $contents);

// Close the file
fclose($file);

echo "File updated successfully.";

?>
