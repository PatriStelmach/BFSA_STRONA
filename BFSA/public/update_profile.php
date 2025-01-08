<?php

use classes\User;

include '../includes/header.php';
include '../config/db.php';
require_once '../classes/User.php';
include '../includes/head.html';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

global $pdo;
$user = new User($pdo);

$user_id = $_SESSION['user_id'];
$userData = $user->getUserById($user_id);

if (!$userData) {
    echo "User not found.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $profile_info = isset($_POST['profile_info']) ? $_POST['profile_info'] : '';
    $avatar_path = '';

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $avatar_tmp_name = $_FILES['avatar']['tmp_name'];
        $avatar_name = $_FILES['avatar']['name'];
        $avatar_destination = '../avatars/' . $avatar_name;

        if (!file_exists('../avatars')) {
            mkdir('../avatars', 0777, true);
        }

        if (move_uploaded_file($avatar_tmp_name, $avatar_destination)) {

            $avatar_path = 'avatars/' . $avatar_name;
        } else {
            echo "Failed to move avatar to destination.";
        }
    }

    $success = $user->updateProfile($user_id, $username, $email, $profile_info, $avatar_path);

    if ($success) {
        echo "<p>Profile updated successfully.</p>";
        header("Location: profile.php");
        exit();
    } else {
        echo "<p>Failed to update profile.</p>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "New password and confirmation password do not match.";
        exit();
    }

    if (!$user->verifyPassword($user_id, $current_password)) {
        echo "Current password is incorrect.";
        exit();
    }

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $update_success = $user->updatePassword($user_id, $hashed_password);

    if ($update_success) {
        echo "<p>Password updated successfully.</p>";
    } else {
        echo "<p>Failed to update password.</p>";
    }
}

include '../includes/footer.php';
?>
