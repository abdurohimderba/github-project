<?php
// Import necessary functions and classes
require_once 'vendor/autoload.php';

// Example user data array
$userData = [
    "name" => "John Doe",
    "email" => "john.doe@example.com",
    "age" => 30,
];

// Function to display user details
function displayUserDetails($userData) {
    echo "Name: " . $userData['name'] . "\n";
    echo "Email: " . $userData['email'] . "\n";
    echo "Age: " . $userData['age'] . "\n\n";
}

// Call the function with user data
displayUserDetails($userData);
