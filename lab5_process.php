<?php
header('Content-Type: application/json');

// Read incoming JSON data from the request body
$jsonInput = file_get_contents('php://input');
$data = json_decode($jsonInput, true);

// Fallback logic for testing
$name = !empty($data['name']) ? $data['name'] : 'Guest';

// Prepare the JSON response array
$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

// Output the JSON response
echo json_encode($response);
?>
