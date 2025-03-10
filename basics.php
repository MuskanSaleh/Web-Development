<?php
// a. Get the PHP version and configuration information
echo "<h3>a. PHP Version and Configuration</h3>";
echo "PHP Version: " . phpversion() . "<br>";
// Uncomment the following line to display full configuration info
// phpinfo();

// b. Get script owner, document root, and OS
echo "<h3>b. Script Owner, Document Root, and OS</h3>";
echo "Script Owner: " . get_current_user() . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Operating System: " . PHP_OS . "<br>";

// c. Swap two variables and print before & after values
echo "<h3>c. Swapping Two Variables</h3>";
$a = 5;
$b = 10;
echo "Before swapping: a = $a, b = $b <br>";
list($a, $b) = array($b, $a);
echo "After swapping: a = $a, b = $b <br>";

// d. Redirect a user to a different webpage
// Uncomment the line below to perform redirection
// header("Location: http://sw.muet.edu.pk");
// exit;

// e. Display specific strings
echo "<h3>e. Displaying Strings</h3>";
echo "Tomorrow I'll learn something new.<br>";
echo "This is a bad command: del c:\\*.*\\$.<br>";

// f. Test number using ternary operator
echo "<h3>f. Ternary Operator Test</h3>";
$number = 25;
$result = ($number > 30) ? "Greater than 30" :
         (($number > 20) ? "Greater than 20" :
         (($number > 10) ? "Greater than 10" : "10 or less"));
echo "Number: $number - Result: $result <br>";

// g. Extract components from a URL
echo "<h3>g. Extracting Components from URL</h3>";
$url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
$parsed_url = parse_url($url);
echo "Scheme: " . $parsed_url['scheme'] . "<br>";
echo "Host: " . $parsed_url['host'] . "<br>";
echo "Path: " . $parsed_url['path'] . "<br>";

?>
