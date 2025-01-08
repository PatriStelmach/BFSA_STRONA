<?php
global $pdo;
use classes\User;
include '../includes/header.php';
include '../config/db.php';
require_once '../classes/User.php';
$user = new User($pdo);
$user->logout();

redirect('index.php');
?>
