<?php
// Define the directory name
$directory = "accounts";

// Create the directory with full perms
mkdir($directory, 0777, true);

// Define the file path for users.txt
$file_path = $directory . "/accounts.txt";

// Create the users.txt file and write some text into it
$file = fopen($file_path, "w");
fwrite($file, "Brandon Pieczarka");
fclose($file);

// Set file perms
chmod($file_path, 0666);

echo "Directory and file created successfully.";
?>
