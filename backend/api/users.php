<?php
declare(strict_types=1);

http_response_code(501);
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['error' => 'Users API is not implemented yet.']);
