<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /Expense_Tracker/frontend/pages/loginpage.php");
    exit;
}