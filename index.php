<?php

if ($_SERVER['REQUEST_URI'] === '/json') {
    header('Content-Type: application/json');

    $data = [
        'message' => 'Hello, this is a JSON response!',
        'status' => 200
    ];

    echo json_encode($data);
    exit();
}

http_response_code(404);
echo json_encode(['error' => 'Route not found']);
