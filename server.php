<?php

$string = file_get_contents("dischi.json");

$new_array = json_decode($string, true);

$response = [
    "results" => $new_array,
    "success" => true
];

header('Content-Type: application/json');

echo json_encode($response);
