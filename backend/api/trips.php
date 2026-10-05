<?php
declare(strict_types=1);

http_response_code(501);
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['error' => 'Trips API is not implemented yet.']);
