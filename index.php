
<?php

$request = $_SERVER['REQUEST_URI'];

// Remove the project directory from the URL
$uri = str_replace('/Expense_Tracker/', '/', $request);

// Remove query parameters, if any
$uri = parse_url($uri, PHP_URL_PATH);

switch ($uri) {

    case '/':
        require 'frontend/pages/home.php';
        break;

    case '/login':
        require 'frontend/pages/loginpage.php';
        break;

    case '/expenses':
        require 'frontend/pages/Expenses.php';
        break;

    case '/savings':
        require 'frontend/pages/Savings.php';
        break;

    case '/settings':
        require 'frontend/pages/Settings.php';
        break;

    case '/support':
        require 'frontend/pages/Support.php';
        break;

    default:
        http_response_code(404);
        echo '<h1>404 - Page Not Found</h1>';
        break;
}
