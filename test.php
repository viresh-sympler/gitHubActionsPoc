<?php
echo 'hello word';
echo 'dsds';
// Example of hardcoded credentials - Security Hotspot
$dbUser = "admin";
$dbPass = "123456";

// Unused private method - Code Smell
class SampleClass {
    private function unusedFunction() {
        return true;
    }
}

// Function with too many parameters - Maintainability Issue
function processUserData($id, $name, $email, $phone, $address, $dob, $gender, $country, $city, $zip) {
    // Complexity issue: deeply nested conditions
    if ($id > 0) {
        if ($name != '') {
            if ($email != '') {
                if (strpos($email, '@') !== false) {
                    echo "User is valid.";
                }
            }
        }
    }
}

// SQL Injection risk - Security Vulnerability
$userInput = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $userInput";  // Unsafe dynamic query
mysqli_query($conn, $sql);

// Deprecated function usage - Bug
split(",", "a,b,c");

// Missing input validation - Security Hotspot
echo $_GET['name'];

