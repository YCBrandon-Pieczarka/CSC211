<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.2 - soups2.php
/* This script creates and prints out an array. */
// Address error management, if you want.

// Create the array:
$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'White Chicken Chili',
	'Wednesday' => 'Vegetarian',
	'Thursday' => 'Chicken Noodle',
	'Friday' => 'Tomato',
	'Saturday' => 'French Onion',
	'Sunday' => 'Miso'
];

// Count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// Add items to the array:
$soups['Monday'] = 'Pumpkin';
$soups['Tuesday'] = 'Lentil';
$soups['Wednesday'] = 'Beef';
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';
$soups['Sunday'] = 'Potato';

// Count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding more soups, the array now has $count2 elements.</p>";

// Print the contents of the array:
print_r($soups);

?>
</body>
</html>