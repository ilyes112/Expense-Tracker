<?php
declare(strict_types=1);

function getDatabaseConnection(): PDO
{
    $dsn = getenv('DB_DSN');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');

    if ($dsn === false || $username === false || $password === false) {
        throw new RuntimeException('Set DB_DSN, DB_USERNAME, and DB_PASSWORD before connecting.');
    }

    return new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
}
