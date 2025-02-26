<?php
// 1. strcmp() - Compares two strings
$firstName = "Brandon";
$secondName = "brandon";

echo "1. strcmp() Example:<br>";
if (strcmp($firstName, $secondName) == 0) {
    echo "$firstName and $secondName are the same.<br><br>";
} else {
    echo "$firstName and $secondName not the same.<br><br>";
}

// 2. str_replace() - Replaces specific text within a string
$fullName = "Brandon Pieczarka";
$updatedName = str_replace("Pieczarka", "Edward", $fullName);

echo "2. str_replace() Example:<br>";
echo "Initial Name: $fullName<br>";
echo "Replaced Name: $updatedName<br><br>";

// 3. strlen() - Returns the length of a string
echo "3. strlen() Example:<br>";
$nameLength = strlen($firstName);
echo "The length of '$firstName' is $nameLength characters.<br>";
?>
